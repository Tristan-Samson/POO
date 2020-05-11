<?php

require_once "Car.php";

class Truck extends Car
{

    private $capacity;
    private $filling=0;

    public function getFilling(): string
    {
        return $this->filling;
    }

    public function setFilling(int $filling): void
    {
        $this->filling = $filling;
    }


    public function getCapacity(): string
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->setCapacity($capacity);
    }

    public function isFilled(): string
    {
        if ($this->getFilling() < $this->getCapacity())
        {
            return "in filling";
        }

        return "full";
    }
}