<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelProdContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::sendForm'], null, null, null, true, false, null]],
            '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\LandingController::index'], null, null, null, false, false, null]],
            '/flat' => [[['_route' => 'flat.post', '_controller' => 'App\\Controller\\LandingController::postCityValues'], null, null, null, true, false, null]],
            '/bills' => [[['_route' => 'bills.post', '_controller' => 'App\\Controller\\LandingController::postBills'], null, null, null, true, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/get/([^/]++)/([^/]++)(*:29)'
                    .'|/bills/([^/]++)/([^/]++)(*:60)'
                    .'|/page/([^/]++)(*:81)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            29 => [[['_route' => 'flat.get', '_controller' => 'App\\Controller\\LandingController::getCityValues'], ['postCode', 'flatType'], null, null, false, true, null]],
            60 => [[['_route' => 'bills.get', '_controller' => 'App\\Controller\\LandingController::getBills'], ['postCode', 'flatType'], null, null, false, true, null]],
            81 => [[['_route' => 'page', '_controller' => 'App\\Controller\\PageController::show'], ['page'], null, null, true, true, null]],
        ];
    }
}
