<?php

require_once('Service/AppleLocationService.php');
require_once('Service/GoogleLocationService.php');
require_once('Client/App.php');

    $apple_location_service = new AppleLocationService();
    $google_location_service = new GoogleLocationService();
    $client = new App($google_location_service);
    $client->findMyLocation();
?>