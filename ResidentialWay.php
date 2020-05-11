<?php

require_once "HighWay.php";

final class ResidentialWay extends Highway
{
    private $nbLane = 2;
    private $maxSpeed = 50;

    public function addVehicle(object $vehicle):void
    {
        $this->setCurrentVehicles($this->getCurrentVehicles() + [$vehicle]);
    }
}