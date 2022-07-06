<?php
// namespace Service;

// use Interface\LocationServiceInterface;
require_once __DIR__ .'/../Interface/LocationServiceInterface.php';

class GoogleLocationService implements LocationServiceInterface{
    public function getLocation(){
        echo "get location using google service";
    } 
}
?>