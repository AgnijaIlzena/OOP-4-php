<?php

class Car
{
    private int $nbWheel;
    private int $currentSpeed;
    private string $color;
    private int $nbSeat;
    private string $energyType;
    private int $currentFuelLevel;
    private bool $hasParkBrake = true;


    public function __construct(string $color, int $nbSeat, string $energyType)
    {
        $this->color = $color;
        $this->nbSeat = $nbSeat;
        $this->energyType = $energyType;
    }

    public function setParkBrake(): string {
        if ($this->hasParkBrake){
            return " on";
        } else {
            return " off";
        }
    }


    public function start(): ?string
    {      try {
        if ($this->hasParkBrake){
            throw new Exception(' Your park break is active ! ');
        }

        if ($this->getCurrentSpeed() === 0) {
            return 'START!';
        } else

        {
            return null;
        }
    } catch (Exception $e){
        return  $this->setHasParkBrake(false) . ' DESACTIVATION of park break !' .PHP_EOL;
    } finally {
        echo  'Ma voiture roule comme un donut.' .PHP_EOL;
    }

    }

//  CODE BELOW IS NOT REQUIRED FOR THE GIVEN EXERCISE POO-4

    public function setNbWheel(int $nbWheel): int
    {
        return  $this->nbWheel = $nbWheel;
    }

    public function getNbWheel(): int
    {
        return $this->nbWheel;
    }

    public function setCurrentSpeed(int $currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function getCurrentSpeed(): int
    {
        return  $this->currentSpeed;
    }

    public function getColor(): string
    {
        return  $this->color;
    }

    public function getNbSeat()
    {
        return  $this->nbSeat;
    }

    public function getEnergyType(): string
    {
        return  $this->energyType;
    }

    public function setCurrentFuelLevel(int $currentFuelLevel)
    {
        $this->currentFuelLevel = $currentFuelLevel;
    }




    public function forward(): ?string
    {
        if ($this->getCurrentSpeed() > 0) {
            return
                'GO GO!';
        } else {
            return null;
        }
    }

    public function brake(): ?string
    {
        if ($this->getCurrentSpeed() > 100)
        {
            return 'BREAK!';
        } else
        {
            return null;
        }
    }


    public function getCurrentFuelLevel(): int
    {
        return $this->currentFuelLevel;
    }

    public function setHasParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }


    public function isHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }
}
