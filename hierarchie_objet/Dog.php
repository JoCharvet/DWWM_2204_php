<?php 

/**
 * Abstract class Dog extends animal
 * 
 * Define global attributes / comportements commons to all dog
 * @author Johnny Charvet <charvetjohnny@outlook.fr>
 */
abstract class Dog extends Animal
{
    /** @var string the name of the dog */
    private $name;

    /**
     * Constructor of Dog
     * Define name, set the specie and the shout
     *
     * @param string $_name , the name of the dog
     * @example $dog = new Labrador('Médor'); only used by children classes
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function __construct(string $_name)
    {
        parent::__construct('Chien','J\'aboie');
        $this->name=$_name;
    }

    /**
     * Getter of the name
     *
     * @return string the name of the Dog
     * @example $labrador->getName() return the name of the Dog
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function getName():string
    {
        return $this->name.PHP_EOL;
    }

    /**
     * Setter of the name
     *
     * @param string $_name the name of the Dog
     * @example $labrador->SetName('Médor') 
     * @return void
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function setName(string $_name)
    {
        $this->name=$_name;
    }

    /**
     * Check if the food correspond to Dog and call the parent method needed
     *
     * @param string $_food the food you need the dog eat
     * @example $labrador->eat('patée');
     * @return void
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function eat(string $_food) :void
    {
        ($_food === 'patée')? parent::Eat($_food): parent::dontEat();
    }
    
    
}