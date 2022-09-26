<?php 

/**
 * Class Car,define attributes/comportements of a Car.
 * @author Johnny Charvet <charvetjohnny@outlook.fr>
 */
class Car
{   
    /** @var string the brand name of the Car */
    protected string $carBrand;
    /** @var string the model name of the Car */
    protected string $carModel;
    /** @var float the weight of the Car, in KG */
    protected float $carWeight;
    /** @var float the speed modifier of the car */
    protected float $carSpeedModifier;
    /** @var Motor */
    protected Motor $motor;

    /**
     * Constructor of Car 
     * Define all Attributes/Comportements of the Car
     *
     * @param string $_carBrand The name of the car's brand default:'Générique'
     * @param string $_carModel The name of the car's model default:'Générique'
     * @param integer $_carWeight   the weight of the car default:1000
     * @param float $_carSpeedModifier the speed modifier of the car. default:30
     * @param Motor $_motor the motor of the car.   default:new Motor()
     * @example $car=new Car('BMW','x6',2395, $motor);
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function __construct(string $_carBrand='Générique',string $_carModel='Générique',int $_carWeight=1000, Motor $_motor= new Motor())
    {
        $this->carBrand=$_carBrand;
        $this->carModel=$_carModel;
        $this->carWeight=$_carWeight;
        $this->carSpeedModifier=0.03;
        $this->motor= $_motor;
    }

    /**
     * Used for access to the brand's name of the car
     *
     * @return string the name of the brand
     * @example echo $car->getCarBrand(); 
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function getCarBrand():string
    {
        return $this->carBrand;
    }

    /**
     * Used for access to the model's name of the car
     *
     * @return string the name of the model
     * @example echo $car->getCarModel(); 
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function getCarModel():string
    {
        return $this->carModel;
    }

    /**
     * Used for access to the weight of the car
     *
     * @return float  the weight of the car
     * @example echo $car->getCarWeight();
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function getCarWeight():float
    {
        return $this->carWeight;
    }

    /**
     * Used for access to the Motor 
     *
     * @return Motor the motor
     * @example echo $car->getCarMotor(); 
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function getCarMotor():Motor
    {
        return $this->motor;
    }

    // /**
    //  * Used for set an motor to a car
    //  *
    //  * @param Motor $_motor the motor you want to add
    //  * 
    //  */
    // function setCarMotor(Motor $_motor):void
    // {
    //     $this->motor= $_motor;
    // }

    /**
     * Used for displaying the brand, the model and the weight of a Car
     *
     * @return string the information to display
     * @example $bmwx6->displayCar() 
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function displayCar():string
    {
       return "Marque : $this->carBrand Modèle : $this->carModel Poids : $this->carWeight .";
    }

    /**
     * Used for set the carSpeedModifier, only used by children of car
     *
     * @param integer $_newModifier the modifier you want set
     * @example parent::setModifier(10);
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    protected function setModifier(float $_newModifier):void
    {
        $this->carSpeedModifier=$_newModifier;
    }

    /**
     * Used for get the maximum speed of the Car
     *
     * @return float the maximum speed
     * @example echo $car->maximumSpeedCar();
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function maximumSpeedCar():float
    {
        return $this->motor->getMaxSpeedKMH() - ($this->carWeight*$this->carSpeedModifier);
    }
}