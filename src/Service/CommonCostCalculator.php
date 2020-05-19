<?php declare(strict_types=1);

namespace App\Service;

use App\Entity\Bill;
use App\Repository\BillRepository;
use App\ValueObject\Cms\BillTypes;

class CommonCostCalculator
{
    /** @var BillRepository */
    private $billRepository;

    /** @var string[] Contains all fields that will be counted for common cost */
    private $calculable;

    public function __construct(BillRepository $billRepository, ApiClientService $apiLoader)
    {
        /** @var BillTypes[] $allBillTypes */
        $allBillTypes = $apiLoader->getBillTypes();

        foreach ($allBillTypes as $billType) {
            if ($billType->getYearCost()) {
                $this->calculable[] = $billType->getSlug();
            }
        }

        $this->billRepository = $billRepository;
    }

    public function getChartData(string $postCode, string $uuid): array
    {
        $current = $this->billRepository->findBy(['uuid' => $uuid]);
        if (!$current) {
            throw new RuntimeException('No current element found');
        }

        $monthlyCost = $this->calculateMonthlyCost($this->filterCalculable($current));

        return array_merge($this->getBackgroundData($postCode), ['current' => $monthlyCost]);
    }

    /**
     * @param Bill[] $bills
     * @return float
     */
    private function calculateMonthlyCost(array $bills): float
    {
        $totalYearCost = 0;
        foreach ($bills as $bill) {
            $totalYearCost += $bill->getValueAsFloat();
        }

        return $totalYearCost;
    }

    /**
     * @param Bill[] $bills
     * @return Bill[]
     */
    private function filterCalculable(array $bills): array
    {
        $filtered = array_filter(
            $bills,
            function (Bill $each) { return $this->isCalculable($each); }
        );
        return array_values($filtered);
    }

    private function isCalculable(Bill $bill): bool
    {
        return in_array($bill->getBillType(), $this->calculable, true);
    }

    private function getBackgroundData(string $postCode): array
    {
        $all = $this->billRepository->findBy(['postcode' => $postCode]);
        $sortedByUuid = [];

        foreach ($this->filterCalculable($all) as $each) {
            $sortedByUuid[$each->getUuid()][] = $each;
        }

        if (count($sortedByUuid) < 20) {
            $all = $this->billRepository->findAll();

            foreach ($this->filterCalculable($all) as $each) {
                $sortedByUuid[$each->getUuid()][] = $each;
            }
        }

        $costsByUuid = [];

        foreach ($sortedByUuid as $each) {
            $costsByUuid[$each[0]->getUuid()] = $this->calculateMonthlyCost($each);
        }

        if (count($costsByUuid) < 1) {
            return [
                'min' => 0.98,
                'max' => 9.89,
                'avg' => 4.44,
            ];
        }

        return [
            'min' => min($costsByUuid),
            'max' => max($costsByUuid),
            'avg' => array_sum($costsByUuid) / count($costsByUuid),
        ];
    }
}