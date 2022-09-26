<?php 
/**
 * Class Girafe extends Herbivore
 * 
 * define all attributes/comportments of a Girafe 
 * @author Johnny Charvet <charvetjohnny@outlook.fr>
 */
class Girafe extends Herbivore
{
    /**
     * Constructor of Girafe
     * 
     * set specie, shout and move by parent constructor
     * @example $gigi = new Girafe(); 
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function __construct()
    {
       parent::__construct('Girafe', 'Je meugle.','Je me deplace lentement.');
    }

    
}