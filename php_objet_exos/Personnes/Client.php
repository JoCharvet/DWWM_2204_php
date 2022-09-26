<?php

/**
 * Class Client extends Person, define adress and client number
 * 
 */
class Client extends Person
{
    /** @var int used for define an unique number for each client */
    private static int $lastnum=0;
    /** @var int the number of the client */
    private int $numClient;
    /** @var Adress the adress of the client */
    private Adress $adress;
    
    /**
     * Constructor of Client
     *
     * @param string $_firstName the first name of the client 
     * @param string $_lastName the last name of the client 
     * @param DateTime $_dateOfBirth thedate of birth of the client 
     * @param integer $_streetNum the street number of the client
     * @param string $_streetName the street name of the client
     * @param string $_postalCode the postal code of the client
     * @param string $_city the city of the client
     * @example $client = new Client('john', 'Doe','1/1/1985',1,'nowhere','00000','nowhere'); 
     */
    function __construct(string $_firstName ,string $_lastName, DateTime $_dateOfBirth, int $_streetNum , string $_streetName, string $_postalCode, string $_city)
    {   
        $this->numClient=++$this->lastnum;
        $this->adress=new Adress($_streetNum,$_streetName,$_postalCode, $_city);
        parent::__construct($_firstName,$_lastName,$_dateOfBirth);
    }

    /**
     * Used to get the client number
     *
     * @return integer the client number
     * @example echo $client->getNumClient(); 
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function getNumClient(): int
    {
        return $this->numClient;
    }
}