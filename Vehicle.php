<?php

class Vehicle
{

  protected string $color;
  protected int $nbWheels;
  protected int $currentSpeed;
  protected int $nbSeats;

  public function __construct(string $color, int $nbSeats)
  {
    $this->$color = $color;
    $this->nbSeats = $nbSeats;
  }

  public function forward(): string
  {
    $this->currentSpeed = 15;
    return "Go !";
  }

  public function brake(): string
  {
    $sentence = "";
    while ($this->currentSpeed > 0) {
      $this->currentSpeed--;
      $sentence .= "Brake !!!";
    }

    $sentence .= "I'm stopped !";
    return $sentence;
  }

  public function setColor(string $color)
  {
    $this->$color = $color;
  }

  public function getColor()
  {
    return $this->$color;
  }

  public function setNbWheels(int $nbWheels)
  {
    $this->$nbWheels = $nbWheels;
  }

  public function getNbWheels()
  {
    return $this->$nbWheels;
  }

  public function setCurrentSpeed(int $currentSpeed)
  {
    $this->$currentSpeed = $currentSpeed;
  }

  public function getCurrentSpeed()
  {
    return $this->$currentSpeed;
  }

  public function setNbSeats(int $nbSeats)
  {
    $this->$nbSeats = $nbSeats;
  }

  public function getNbSeats()
  {
    return $this->$nbSeats;
  }
}
