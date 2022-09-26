<?php 

/**
 * class Intervention defines Attributes/Comportements of an Intervention
 * need an Contributor and a Client
 */
class Intervention
{   
    /** @var DateTime , the Date of the intervention */
    private DateTime $dateIntervention; 
    /** @var string , the description of the intervention */
    private string $description;
    /** @var Client  the client who ask the intervention */
    private Client $client;
    /** @var Contributor the contributor who realize the intervention */
    private Contributor $contributor;

    function __construct(Contributor $_contributor , Client $_client, $_description='')  
    {
        $this->dateIntervention=new DateTime();
        $this->description= $_description;
        $this->client= $_client;
        $this->contributor= $_contributor;
    }

     /**
     * Getter of intervention date
     *
     * @example echo $intervention->getDateIntervention(); 
     * @return DateTime the date of the intervention
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function getDateIntervention():DateTime
    {
        return $this->dateIntervention;
    }

     /**
     * Getter of description of the intervention
     *
     * @example echo $intervention->getDescription(); 
     * @return string the description of the intervention
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Getter of CLient of the intervention
     *
     * @example echo $intervention->getClient(); 
     * @return Client the client
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function getClient():Client
    {
        return $this->client;
    }

    /**
     * Getter of the contributo who realize the intervention
     * @example $intervention->getContributor(); 
     * @return Contributor the contributor who realize the intervention
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function getContributor():Contributor
    {
        return $this->contributor;
    }
}