<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'eight_points_guzzle.handler_stack.api_client' shared service.

$this->services['eight_points_guzzle.handler_stack.api_client'] = $instance = \GuzzleHttp\HandlerStack::create();

$instance->unshift(($this->services['eight_points_guzzle.middleware.event_dispatch.api_client'] ?? $this->load('getEightPointsGuzzle_Middleware_EventDispatch_ApiClientService.php'))->dispatchEvent(), 'events');

return $instance;
