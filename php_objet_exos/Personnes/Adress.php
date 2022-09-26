<?php 

/**
 * Class Adress represent the Adress of a Client
 */
class Adress
{
    /** @var int $streetNum , the number of the street */
    private int $streetNum;
    /** @var string $streetName , the name of the street */
    private string $streetName;
    /** @var string $postalCode , the postal code of the client */
    private string $postalCode;
    /** @var string $city , the city of the client */
    private string $city;

    /**
     * The Constructor of the adress
     *
     * @param integer $_streetNum the number of the street
     * @param string $_streetName the name of the street 
     * @param string $_postalCode  the postal code of the client 
     * @param string $_city the city of the client
     * @example location description
     */
    function __construct(int $_streetNum, string $_streetName , string $_postalCode , string $_city)
    {
        $this->streetNum=$_streetNum;
        $this->streetName=$_streetName;
        $this->postalCode=$_postalCode;
        $this->city=$_city;
    }
}