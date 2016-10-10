<?php

namespace Raspberium\Http\Controllers;

use Raspberium\Domain\DHT22;

class SensorController extends Controller
{

    public function index()
    {
        return false;
    }

    public function getTemperature()
    {
        $dht22 = new DHT22;
        echo $dht22->getTemperature();
    }

    public function getHumidity()
    {
        $dht22 = new DHT22;
        echo $dht22->getHumidity();
    }
    
    public function getTemperatureHumidityObject()
    {
        $dht22 = new DHT22;
        echo $dht22->getTemperatureHumidityObject();
    }

    public function debugDht22()
    {
        $dht22 = new DHT22;
        echo "<pre>";
        var_dump($dht22->read());
        echo "</pre>";
    }

}
