<?php
final class ResidentialWay extends Highway{
    public function __construct(int $nbLane,int $maxSpeed) {
        $this->nblane=2;
        $this->maxSpeed=50;
    }

    public function addVehicule (Vehicule $vehicule) {
        $this->currentVehicule[] = $vehicule;
    }
}