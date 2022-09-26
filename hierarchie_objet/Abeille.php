<?php 
/**
 * Class Abeille extends animal
 * 
 * define all attributes/comportments of an Abeille and check if the food correspond to 'nectar'
 * @author Johnny Charvet <charvetjohnny@outlook.fr>
 */
class Abeille extends Animal
{
    /**
     * Constructor of Abeille
     * 
     * define the specie, the move and the shout 
     * @example $abeille = new Abeille();
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function __construct()
    {
        parent::__construct('Abeille','Je bourdonne','Je me deplace en volant.');
        
    }
    /**
     * Check if the food correspond to 'nectar' and use the parent method needed
     *
     * @param string $_food the food you want the Abeille eat
     * @example $abeille->eat('nectar'); 
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function eat(string $_food):void
    {
         (strtolower($_food)=== 'nectar') ? parent::eat($_food) : parent::dontEat();
    }
  
}