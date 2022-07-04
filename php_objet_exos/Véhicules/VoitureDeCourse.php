<?php

declare(strict_types=1);
require('Voiture.php');


class VoitureDeCourse extends Voiture
{
    function __construct(string $_marque,string $_modele,int $_poids,Moteur $_moteur)
    {
        if($_moteur->marque === $_marque){

            parent::__construct($_marque, $_modele, $_poids, $_moteur);
            // $this->marque = $_marque;
            // $this->modele= $_modele;
            // $this->poids=$_poids;
            // $this->moteur=$_moteur;
        }
        else{
            return null;
        }
    }

    public function calcVitesseMax():int
    {
        return $this->vitesse_max-($this->poids*(5/100));
    }

}

