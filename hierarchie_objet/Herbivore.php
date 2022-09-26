<?php
/**
 * abstract Class Herbivore extends Herbivore
 * 
 * Define attributes / comportements commons to all Herbivore
 * @author Johnny Charvet <charvetjohnny@outlook.fr>
 */
class Herbivore extends Animal
{
    /** list of accepted food */
    private array $veggie=['herbe','foin',"feuille"];

    /**
     * Used for display the Herbivore eating by calling parent methods 
     *
     * @param string $_food he food to eat
     * @return void
     * @example $gigi->eat('chewing-gum') 
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function eat(string $_food):void
    {
        (in_array($_food,$this->veggie))? Animal::eat($_food):parent::dontEat();
    }
}