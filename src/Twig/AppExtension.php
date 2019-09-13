<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use App\Service\ApiClientService;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    protected $apiClientService;

    public function __construct(ApiClientService $apiClientService)
    {
        $this->apiClientService = $apiClientService;
    }

    public function getFilters()
    {
        return [
            new TwigFilter('toWording', [$this, 'toWording']),
        ];
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('lookupParameterValue', [$this, 'getLookupParameterValue'])
        ];
    }

    public function getLookupParameterValue($array, $value)
    {
        $output = array_values(array_filter($array, function($item) use ($value) {
            return $item->getBillType() == $value;
        }));

        if (count($output)) {
            return $output[0];
        }

        return false;
    }

    public function toWording($word)
    {
        $wording = $this->apiClientService->findWordingByKey($word);

        if ($wording) {
            return $wording->getWording();
        }

        return 'Missing text: ' . $word;
    }
}
