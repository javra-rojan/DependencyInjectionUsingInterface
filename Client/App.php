<?php
// namespace Client;

require_once __DIR__ .'/../Interface/LocationServiceInterface.php';

class App{
    private ?LocationServiceInterface $location_service = null;
    public function __construct(LocationServiceInterface $service){
        $this->location_service = $service;
    }
    public function findMyLocation(){
        $this->location_service->getLocation();
    }
}
?>