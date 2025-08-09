<?php

class Voiture {
    private $vitesse;
    public function setVitesse($speed){
        if($speed >= 0 && $speed <= 200){
            $this->vitesse = $speed;
        }else{
            echo 'Vitesse invalide';
        }
    }

    public function getVitesse() {
        return $this->vitesse;
    }
}

$maVoiture = new Voiture();

$maVoiture->setVitesse(300);

echo $maVoiture->getVitesse();