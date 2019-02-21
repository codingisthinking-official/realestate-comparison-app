<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use App\ValueObject\Cms\Wording;
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
            new TwigFilter('cityInfo', [$this, 'cityInfo']),
            new TwigFilter('findCity', [$this, 'findCity']),
        ];
    }

    public function toWording($word)
    {   
        $wordingList = $this->apiClientService->getWordings();

        foreach ($wordingList as $wording) {
            if ($wording->getTitle() == $word) {
                return $wording->getWording();
            }
        }

        return 'Missing text: '.$word;
    }

    public function cityInfo($city, $type = "title")
    {   
        $pageList = $this->apiClientService->getPages();

        foreach ($pageList as $page) {
            if ($page->getSlug() == $city) {
                switch ($type) {
                    case "title":
                        return $page->getTitle();
                        break;
                    case "photo":
                        return $page->getPhoto();
                        break;
                    case "position":
                        return $page->getPosition();
                        break;
                    case "description":
                        return $page->getDescription();
                        break;
                    case "title_header":
                        return $page->getTitleHeader();
                        break;
                    case "subtitle_header":
                        return $page->getSubtitleHeader();
                        break;
                }
            }
        }

        return 'Missing city: '.$city.' With key: '.$type;
    }

    public function findCity($parametr, $type = "position")
    {   
        $pageList = $this->apiClientService->getPages();

        foreach ($pageList as $page) {
            switch ($type) {
                case "title":
                    if ($page->getTitle() == $parametr) {
                        return $page->getSlug();
                    }
                    break;
                case "photo":
                    if ($page->getPhoto() == $parametr) {
                        return $page->getSlug();
                    }
                    break;
                case "position":
                    if ($page->getPosition() == $parametr) {
                        return $page->getSlug();
                    }
                    break;
                case "description":
                    if ($page->getDescription() == $parametr) {
                        return $page->getSlug();
                    }
                    break;
                case "title_header":
                    if ($page->getTitleHeader() == $parametr) {
                        return $page->getSlug();
                    }
                    break;
                case "subtitle_header":
                    if ($page->getSubtitleheader() == $parametr) {
                        return $page->getSlug();
                    }
                    break;
            }
        }
        return 'Missing city: '.$parametr;
    }
}
