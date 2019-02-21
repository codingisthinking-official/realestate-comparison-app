<?php

namespace App\Service;

use JMS\Serializer\SerializerInterface;
// use Buzz\Browser;

class ApiClientService
{
    protected $apiUrl="http://realestate.wiseweb.pl";
    protected $serializer;
    // protected $browser;
    
    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
        // $this->browser = $browser;
    }
    
    public function getPages(): array
    {
        // $response = $this->browser->get($this->apiUrl . '/api/pages/');
        $json = file_get_contents('http://realestate.wiseweb.pl/api/pages/');
        return $this->serializer->deserialize($json, 'array<App\ValueObject\Cms\Page>', 'json');
    }
    
    public function getWordings(): array
    {
        // $response = $this->browser->get($this->apiUrl . '/api/wording/');
        $json = file_get_contents('http://realestate.wiseweb.pl/api/wording/');
        return $this->serializer->deserialize($json, 'array<App\ValueObject\Cms\Wording>', 'json');
        
    }
}