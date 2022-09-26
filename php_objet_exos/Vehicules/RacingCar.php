<?php 

/**
 * Class RacingCar,define attributes/comportements of a RacingCar.
 * @author Johnny Charvet <charvetjohnny@outlook.fr>
 */
class RacingCar extends Car
{
     /**
     * Constructor of RacingCar 
     * Define all Attributes of the RacingCar
     *
     * @param string $_carBrand The name of the car's brand 
     * @param string $_carModel The name of the car's model 
     * @param integer $_carWeight the weight of the car 
     * @param Motor $_motor the motor of the car.  
     * @example $car=new Car('BMW','x6',2395, $motor);
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function __construct(string $_brand, string $_model,float $_weight,Motor $_motor)
    {

        if($_motor->getBrand()===$_brand)
        {         
            parent::__construct($_brand,$_model,$_weight,$_motor);
            $this->setModifier(0.01); 
        }
        else
        {
            echo 'Impossible moteur non compatible';
            //throw new InvalidArgumentException('Impossible moteur non compatible');
        }
    }
}