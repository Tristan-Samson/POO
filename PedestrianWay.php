<?php

require_once "HighWay.php";

final class PedestrianWay extends HighWay
{
    private $nbLane = 1;
    private $maxSpeed = 10;

    public function addVehicle(object $vehicle):void
    {
        if (($vehicle instanceof Bike ) or ($vehicle instanceof Skateboard ))
        {
            $this->setCurrentVehicles($this->getCurrentVehicles() + [$vehicle]);
        }
    }
}