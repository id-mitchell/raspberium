<?php

namespace Raspberium\Http\Controllers;

use Raspberium\Domain\Relay;

class LightController extends Controller
{

    public function index()
    {
        return false;
    }

    public function light1On()
    {
        $light = new Relay($this->getLight1Pin());
        try {
            $light->on();
        }
        catch (\Exception $e) {
            echo 'false';
        }

        echo 'flerp';
    }

    public function light1Off()
    {
        $light = new Relay($this->getLight1Pin());
        try {
            $light->off();
        }
        catch (\Exception $e) {
            echo 'false';
        }

        echo 'flerp';
    }

    public function light2On()
    {
        $light = new Relay($this->getLight2Pin());
        try {
            $light->on();
        }
        catch (\Exception $e) {
            echo 'false';
        }

        echo 'flerp';
    }

    public function light2Off()
    {
        $light = new Relay($this->getLight2Pin());
        try {
            $light->off();
        }
        catch (\Exception $e) {
            echo 'false';
        }

        echo 'flerp';
    }

}
