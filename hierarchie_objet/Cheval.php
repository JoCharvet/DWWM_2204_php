<?php 
/**
 * Class Cheval extends Herbivore
 * 
 * define all attributes/comportments of a Cheval and check if the food correspond to him
 * @author Johnny Charvet <charvetjohnny@outlook.fr>
 */
class Cheval extends Herbivore
{
    /**
     * Constructor of Cheval
     * Use the parent construct to define the specie and the shout
     * @example $horse = new Cheval(); for create a new horse
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function __construct()
    {
        parent::__construct('Cheval',' je hennis');    
    }
    
    /**
     * Used for check if the food correspond to the Cheval and call the parent method 
     *
     * @param string $_food the food you want the Cheval eat
     * @example $horse->eat('foin');
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function eat(string $_food):void
    {
        ($_food === 'herbe'||$_food==='foin')?Animal::eat($_food) : parent::dontEat();
    }
}