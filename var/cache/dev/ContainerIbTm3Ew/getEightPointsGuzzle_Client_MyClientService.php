<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'eight_points_guzzle.client.my_client' shared service.

$a = \GuzzleHttp\HandlerStack::create();
$a->push(($this->services['eight_points_guzzle.middleware.log.my_client'] ?? $this->load('getEightPointsGuzzle_Middleware_Log_MyClientService.php'))->log(), 'log');
$a->after('log', ($this->services['eight_points_guzzle.middleware.request_time.my_client'] ?? $this->load('getEightPointsGuzzle_Middleware_RequestTime_MyClientService.php')), 'request_time');
$a->push(($this->services['eight_points_guzzle.middleware.symfony_log'] ?? $this->load('getEightPointsGuzzle_Middleware_SymfonyLogService.php')), 'symfony_log');
$a->push(($this->services['eight_points_guzzle.middleware.profile.my_client'] ?? $this->load('getEightPointsGuzzle_Middleware_Profile_MyClientService.php'))->profile(), 'profile');
$a->unshift(($this->services['eight_points_guzzle.middleware.event_dispatch.my_client'] ?? $this->load('getEightPointsGuzzle_Middleware_EventDispatch_MyClientService.php'))->dispatchEvent(), 'events');

return $this->services['eight_points_guzzle.client.my_client'] = new \GuzzleHttp\Client(['base_uri' => NULL, 'handler' => $a, 'timeout' => 30.0, 'http_errors' => true, 'headers' => ['User-Agent' => 'EightPointsGuzzleBundle/v7']]);
