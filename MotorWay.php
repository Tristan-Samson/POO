<?php

require_once "HighWay.php";

final class MotorWay extends Highway
{
    private $nbLane = 4;
    private $maxSpeed = 130;

    protected function addVehicle(object $car): void
    {
        if ($car instanceof Car) {
            $this->setCurrentVehicles($this->getCurrentVehicles() + [$car]);
        }
    }
}