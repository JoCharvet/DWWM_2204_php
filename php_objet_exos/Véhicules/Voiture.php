<?php

declare(strict_types=1);
require('Moteur.php');


class Voiture 
{
    /** @var string */
    protected string $marque ='générique';
    /** @var string */
    protected string $modele ='generique';
    /** @var int $poids */
    protected int $poids = 1000;
    /** @var Moteur */
    protected Moteur $moteur= new Moteur("générique",185);

    public function __construct(string $_marque,string $_modele,int $_poids,Moteur $_moteur){

        $this->marque=$_marque;
        $this->modele=$_modele;
        $this->poids=$_poids;
        $this->moteur=$_moteur;

    }

    public function marque(string $_val) {

        return ($_val==="")? $this->marque : $this->marque=$_val;
    }

    public function modele(string $_val) {

        return ($_val==="")? $this->modele : $this->modele=$_val;
    }

    public function poids(int $_val) {

        return ($_val==="")? $this->poids : $this->poids=$_val;
    }

    public function moteur(Moteur $_val) {

        return ($_val==="")? $this->moteur : $this->moteur=$_val;
    }
    
    public function calcVitesseMax():int
    {
        return $this->vitesse_max-($this->poids*(30/100));
    }
    
}
