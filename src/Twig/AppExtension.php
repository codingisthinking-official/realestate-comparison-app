<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use App\Service\ApiClientService;

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

    public function toWording($word)
    {
        $wording = $this->apiClientService->findWordingByKey($word);

        if ($wording) {
            return $wording->getWording();
        }

        return 'Missing text: ' . $word;
    }
}
