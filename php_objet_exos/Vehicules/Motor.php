<?php 

/**
 * Class Motor,define attributes/comportements of Motor, component of the class Car and childrens.
 * @author Johnny Charvet <charvetjohnny@outlook.fr>
 */
class Motor
{
    /** @var string the name of the motor's brand */
    private string $motorBrand;
    /** @var float the maximum speed of the motor*/
    private float $motorMaxSpeedKMH;

    /**
     * Constructor of Motor
     *
     * @param string $_brand set the brand of the Motor
     * @param float $_maxSpeed set the maximum speed of the Motor
     * @example $motor= new Motor('Bmw','320') description
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function __construct(string $_brand='Générique', int $_motorMaxSpeedKMH=150)
    {
        $this->motorBrand= $_brand;
        $this->motorMaxSpeedKMH=$_motorMaxSpeedKMH;
    }
    
    /**
     * Used to display the brand of the Motor
     * @example $motor->getBrand()  
     * @return string the brand name of the Motor
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function getBrand():string
    {
        return $this->motorBrand;
    }

    /**
     * Used to display the maximum speed of the Motor
     * @example $motor->getMaxSpeedKMH() 
     * @return float the maximum speed of the Motor
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function getMaxSpeedKMH():float
    {
        return $this->motorMaxSpeedKMH;
    }
}




