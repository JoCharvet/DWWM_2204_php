<?php 
/**
 * 
 * Class Dice , Used for play a round, any player have three dices
 * 
 */
class Dice
{
    private int $value;
    private bool $keep;
    private array $display;

    public function __construct()
    {
        $this->keep=false;
        $this->display=["   \n 0 \n   \n", "0  \n   \n  0\n","0  \n 0 \n  0\n", "0 0\n   \n0 0\n", "0 0\n 0 \n0 0\n", "0 0\n0 0\n0 0\n"];
        $this->lauch();
    }

    public function getvalue():int
    {
        return $this->value;
    }

    public function lauch()
    {
        if(!$this->keep)
        {
            $this->value=rand(0,6);
        }  
    }

    public function __toString()
    {
        return $this->display[$this->value-1];
    }

    public function keep()
    {
        $this->keep=!$this->keep;    
    }

}
    // $dice = new dice();
    // echo $dice;
    // echo $dice->getValue();



