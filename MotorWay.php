<?php
final class MotorWay extends Highway{
    public function __construct(int $nbLane,int $maxSpeed) {
        $this->nblane=4;
        $this->maxSpeed=130;
    }

    public function addVehicule (Vehicule $vehicule) {
        if(!($vehicule instanceof Bicycle)){
        $this->currentVehicule[] = $vehicule;
        }
    }
}