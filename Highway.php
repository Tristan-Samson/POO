<?php

require_once "Car.php";
require_once "Truck.php";
require_once "Bicycle.php";



abstract class Highway
{
    /**
     * @var array
     */
    private $currentVehicles;

    /**
     * @var integer
     */
    private $nbLane;

    /**
     * @var integer
     */
    private $maxSpeed;

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(array $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(array $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract protected function addVehicle(object $car){}
}