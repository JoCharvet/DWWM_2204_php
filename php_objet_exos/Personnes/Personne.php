<?php 

/**
 * Abstract class Person , Define all attributes/comportements of a Person
 */
abstract class Person
{   
    /** @var string $firstName ,the first name of a Person */
    private string $firstName;
    /** @var string $lastName ,the last name of a Person */
    private string $lastName;
    /** @var DateTime $dateOfBirth the date when the Person are born */
    private DateTime $dateOfBirth;

    /**
     * Constructor of personne, define the first name, last name and date of birth of one person
     *
     * @param string $_firstName the first name of an Person
     * @param string $_lastname the last name of an Person
     * @param DateTime $_dateOfBirth the date of birth of an Person
     * @example $person = new Person('Johnny','Charvet','02/07/1985') description
     */
    function __construct(string $_firstName,string $_lastname, DateTime $_dateOfBirth)
    {
        $this->firstName=$_firstName;
        $this->lastName=$_lastname;
        $this->dateOfBirth=$_dateOfBirth;
    }

    /**
     * Used for getting the lastName of a Person
     *
     * @return string the lastName of a Person
     * @example echo $person->getLastName();
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function getLastName():string
    {
        return $this->lastName;
    }

    /**
     * Used to set the lastName of a Person
     *
     * @param string $_lastName the last name to set
     * @example echo $person->setLastName('Charvet');
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function setLastName(string $_lastname):void
    {
        $this->lastName=$_lastname;
    }
    /**
     * Used for getting the firstName of a Person
     *
     * @return string the firstName of a Person
     * @example echo $person->getFirstName();
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function getFirstName():string
    {
        return $this->firstName;
    }

     /**
     * Used for getting the date of birth of a Person
     *
     * @return DateTime the date of birth of a Person
     * @example echo $person->getDateOfBirth();
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function getDateOfBirth():DateTime
    {
        return $this->dateOfBirth;
    }
}