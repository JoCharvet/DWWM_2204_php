<?php  

declare(strict_types=1);

class Moteur 
{

    protected string $marque;
    protected int $vitesse_max;

    public function marque(string $_val) : string{

        return ($_val===0)? $this->marque : $this->marque=$_val;
    }
    public function vitesse_max(int $_val) {

        return ($_val==="")? $this->vitesse_max : $this->vitesse_max=$_val;
    }

    function __construct($_marque, $_vitesse_max){

        $this->marque =$_marque;
        $this->vitesse_max=$_vitesse_max;
    }
}
