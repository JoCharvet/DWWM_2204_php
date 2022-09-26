<?php 

class Player 
{
    private string $name;
    private string $score;

    function __construct(string $_name)
    {
        $this->name=$_name;
        $this->score=0;
    }
}