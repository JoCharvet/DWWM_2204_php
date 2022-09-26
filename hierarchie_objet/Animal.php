<?php 

/**
 * Abstract Class Animal, define all global attributes/comportments of all animals
 *  
 * @author Johnny Charvet <charvetjohnny@outlook.fr>
 */
abstract class Animal
{
    private string $specie;
    private string $shout='Cri';
    private string $move='Je me deplace.';

    /**
     * Constructor of animal
     *
     * @param string $_specie the specie to the Animal 
     * @example parent::__construct('Girafe'); , Only used by the constructor of childrens class.
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
     protected function __construct(string $_specie, string $_shout='Je crie', string $_move='Je me deplace')
    {
        $this->specie=$_specie;
        $this->shout=$_shout;
        $this->move=$_move;
    }

    // /**
    //  * Used for set the shout of the animal
    //  *
    //  * @param string $_shout the shout needed
    //  * @example parent::setshout('mew'); , only used by children class.
    //  * @author Johnny Charvet <charvetjohnny@outlook.fr>
    //  */
    // protected function setShout(string $_shout):void
    // {
    //     $this->shout=$_shout;
    // }

    // /**
    //  * Used for set the move of the animal
    //  *
    //  * @param string $_move the move needed
    //  * @example parent::setMove('flying'); , only used by children class.
    //  * @author Johnny Charvet <charvetjohnny@outlook.fr>
    //  */
    // protected function setMove(string $_move):void
    // {
    //     $this->move=$_move;
    // }

    /**
     * Used to get the species of the animal
     *
     * @param string $_move the move needed
     * @example parent::getSpecie();  return 'Girafe', only used by children class.
     * @return string the species of the Animal
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function getSpecie():string
    {
        return $this->specie;
    }

     /**
     * Used by Animal for display the specie and food the animal eat
     *
     * @param string $_food the food you want the Animal eat
     * @example parent::eat('cupcake'); , only used by children class.
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function eat(string $_food):void
    {
        echo $this->specie.' : Je mange '.$_food.'.'.PHP_EOL;
    }

     /**
     * Used by Animal for display the specie and food the Animal eat
     *
     * @param string $_food the food you want the Animal eat
     * @example parent::eat('cupcake'); , only used by children class.
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function move():void
    {
        echo $this->specie.' : '.$this->move.PHP_EOL;
    }

     /**
     * Used by Animal for display the shout of the Animal 
     *
     * @example parent::shout(); , only used by children class depends of the shout of the class. 
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function shout():void
    {
        echo $this->specie.' : '.$this->shout.PHP_EOL;
    }

     /**
     * Used by Animal for display the animal wouldn't eat
     *
     * @param string $_food the food you want the Animal eat
     * @example parent::dontEat('cupcake'); , only used by children class.
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function dontEat():void
    {
        echo  $this->specie.' : Je ne mange pas ça'.PHP_EOL;
    }

}