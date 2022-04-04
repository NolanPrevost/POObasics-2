<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
  private string $energy;
  private int $energyLevel;
  private int $loadCapacity;
  private int $currentLoad = 0;

  public const ALLOWED_ENERGIES = [
    'SP98', 'SP95', 'diesel', 'electric',
  ];

  public function __construct(string $color, int $nbSeats, string $energy, int $loadCapacity)
  {
    parent::__construct($color, $nbSeats);
    $this->setEnergy($energy);
    $this->loadCapacity = $loadCapacity;
  }

  public function isLoad(): string
  {
    if ($this->currentLoad < $this->loadCapacity) {
      return "In filling";
    } else if ($this->currentLoad === $this->loadCapacity) {
      return "Full !!!";
    } else {
      $this->currentSpeed = 0;
      return "Over filled !! Cant move !!";
    }
  }

  public function getCurrentLoad(): int
  {
    return $this->currentLoad;
  }

  public function setCurrentLoad(int $currentLoad): void
  {
    $this->currentLoad = $currentLoad;
  }

  public function getLoadCapacity(): int
  {
    return $this->loadCapacity;
  }

  public function setLoadCapacity(int $loadCapacity): void
  {
    $this->loadCapacity = $loadCapacity;
  }

  public function setEnergy(string $energy)
  {
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
      $this->energy = $energy;
    }
  }

  public function getEnergy(): string
  {
    return $this->energy;
  }

  public function getEnergyLevel(): int
  {
    return $this->energyLevel;
  }

  public function setEnergyLevel(int $energyLevel): void
  {
    $this->energyLevel = $energyLevel;
  }
}
