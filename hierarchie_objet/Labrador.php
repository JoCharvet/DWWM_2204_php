<?php 

/**
 * Class Labrador extends Dog
 * 
 * define all attributes/comportments of a Labrador and set move correspond to him
 * @author Johnny Charvet <charvetjohnny@outlook.fr>
 */
class Labrador extends Dog
{
    private bool $rand=false;
    /**
     * Call the parent constructor
     *
     * @param string $_name the name of the dog
     * @example $rex = new Labrador();
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function __construct(string $_name)
    {
        parent::__construct($_name);
    }

    /**
     * Used for display the labrador move only one time on two
     *
     * @return void
     * @example $rex->move(); 
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function move() :void{

        if($this->rand)
        {
            parent::move();
        }
        else
        {
            echo parent::getSpecie().' : refuse d\'avancer'.PHP_EOL;
        }
        $this->rand=!$this->rand;
    }
}