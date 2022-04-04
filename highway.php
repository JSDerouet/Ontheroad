<?php
abstract class Highway {
    protected array $currentVehicule;
    protected int $nbLane;
    protected int $maxSpeed;
    
    public function getMaxSpeed(): int

    {
        return $this->maxSpeed;
    }


    public function setMaxSpeed(int $maxSpeed): void

    {
        $this->maxSpeed = $maxSpeed;
    }

    public function getNbLane(): int

    {
        return $this->nbLane;
    }


    public function setNbLane(int $nbLane): void

    {
        if($nbLane<0)
        $this->nbLane = $nbLane;
    }

    abstract public function addVehicule (Vehicule $vehicule);
}