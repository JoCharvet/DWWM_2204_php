<?php 

/**
 * Class Pinscher extends Dog
 * 
 * define all attributes/comportments of a Pinscher and set move correspond to him
 * @author Johnny Charvet <charvetjohnny@outlook.fr>
 */
class Pinscher extends Dog
{
    /**
     * Pinscher constructor , call the parent constructor and set the name of the Pinscher
     *
     * @param string $_name the name of the Pinscher
     * @example $milou= new Pinscher('Milou');
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function __construct(string $_name)
    {
        parent::__construct($_name);
    }

    /**
     * Used for displaying the move of the Pinscher, he call the method shout everytime he move
     *
     * @return void
     * @example $milou->move()
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function move():void
    {
        $this->shout();
        parent::move();
    }
}