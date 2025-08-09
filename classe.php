<?php
class CompteBancaire{
    private $solde=0;
    public function depot($montant){
        if($montant>0){
            $this->solde+=$montant;
        }
    }
    public function getsolde(){
        return $this->solde;
    }
}
$compte= new CompteBancaire();
$compte->depot(500);
echo $compte->getsolde()."FCFA";
