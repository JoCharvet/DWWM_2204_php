<?php

/**
 * 
 * Class Ustensile
 * 
 * Used to manipulate some Ingredients
 * 
 * 
 */
class Ustensile
{
    /** @var string the name of the Ustensile */
    private string $ustensileName;

    /**
     * Constructor of Ustensile
     *
     * @param string $_name for set the name of the Ustensile
     */
    function __construct(string $_name)
    {
        $this->ustensileName=$_name;
    }

    /**
     * 
     * Used for return to the name of Ustensile
     *
     * @return string the name of the Ustensile
     */
    public function getName() : string 
    {
        return $this->ustensileName;
    }
}

?>