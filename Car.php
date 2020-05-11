<?php

require_once "Vehicle.php";

class Car extends Vehicle implements LightableInterface
{
    /**
     * @var bool
     */
    private $hasParkBrake;

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];
    protected $energy;
    protected $energyLevel=100;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setParkBrake(): void
    {
        $this->hasParkBrake = !($this->hasParkBrake);
    }

    public function start():string
    {
        try {
            if ($this->hasParkBrake)
            {
                throw new Exception();
            }
        }
        catch (Exception $e)
        {
            $this->setParkBrake();
        } finally {
            return "Ma voiture roule comme un donut";
        }
    }

    public function drive(): string
    {
        $this->energyLevel -= 0.01*$this->getCurrentSpeed();
        return $this->forward();
    }
    public function switchOn() :bool{
        return true;
    }
    public function switchOff() :bool{
        return false;
    }
}