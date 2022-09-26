<?php 

require __DIR__.'./Dice.php';

class Round 
{
    /** @var Dice  dice to lauch for the player */
    private array $dices;
    /** @var int number of point will be granted to the winner */
    private int $scoreWin;
    /** @var int number of point will be substract if the player loss */
    private int $scoreLoose;
    /** @var int number of trial */
    private int $trialNumber;
    /** @var int the trial limit */
    private int $trialLimit;

    function __construct(int $_trialLimit )
    {
        $this->dices= [new Dice(),new Dice(),new Dice()];
        $this->scoreWin=30;
        $this->scoreLoose=-10;
        $this->trialNumber=0;
        $this->trialLimit=$_trialLimit;
    }

    function playATurn()
    {
        $this->displayAll();
        echo 'Quelles dés souhaitez-vous conservez ? ex: 1 2 conservera le premier et les deuxieme dés';  
    }

    function displayAll()
    {
        $i=1;
        foreach ($this->dices as $item)
        {
            echo $i++;
            $item->display();
        }
    }

    function chooseToKeep()
    {

    }

  

}