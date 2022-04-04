<?php
final class PedestrianWay extends Highway{
    public function __construct(int $nbLane,int $maxSpeed) {
        $this->nblane=1;
        $this->maxSpeed=10;
    }

    public function addVehicule (Vehicule $vehicule) {
        if($vehicule instanceof Bicycle){
            $this->currentVehicule[] = $vehicule;
            }
    }
}