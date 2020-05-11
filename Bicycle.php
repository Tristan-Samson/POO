<?php

require_once "Vehicle.php";

class Bicycle extends Vehicle implements LightableInterface
{
    /**
     * @var string
     */
    public $color;

    /**
     * @var integer
     */
    public $currentSpeed;
    /**
     * @var integer
     */
    public $nbSeats = 1;
    /**
     * @var integer
     */
    public $nbWheels = 2;

    public function switchOn(): bool
    {
        if ($this->getCurrentSpeed()>10){
            return true;
        }
        return false;
    }

    public function switchOff(): bool
    {
        return false;
    }
}