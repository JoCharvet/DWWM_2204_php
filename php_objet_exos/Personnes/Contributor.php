<?php 

/**
 * Class Contributor, extends Person, define salary and other income
 */
class Contributor extends Person
{
    // /** @var int used for construct the contributor code */
    // static int $uniqueCode;
    // /** @var string the contributor code */
    // private string $contributorCode;
    /** @var float the salary of the contributor */
    private float $salary;
    /** @var float the other income of the contributor */
    private float $otherIncome;
    /** @var float the salary percent fee  */
    private const SALARY_PERCENT_FEE=0.2;
    /** @var float the otherIncome percent fee  */
    private const OTHER_INCOMES_PERCENT_FEE=0.15;

    /**
     * Constructor of Contributor
     * @param string $contributorCode the code unique of the contributor
     * @param string $_firstName the first name of the Contributor
     * @param string $_lastName the last name of the Contributor
     * @param DateTime $_dateOfBirth the date of birth of the Contributor
     * @param integer $_salary the salary of the Contributor , default : 0
     * @param integer $_otherIncome the other income of the Contributor , default : 0
     * @example $contributor = new Contributor('john', 'Doe','1/1/1985',1800,0);
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function __construct(string $_firstName, string $_lastName, DateTime $_dateOfBirth,float $_salary=0,float $_otherIncome=0)
    {
        parent::__construct($_firstName,$_lastName,$_dateOfBirth);
        $this->salary=$_salary;
        $this->otherIncome=$_otherIncome;
        //$this->contributorCode= substr($this->lastName,0,3).++$this->uniqueCode.$this->getDateOfBirth()->format('ym').substr($this->getFirstName(),1);
    }

    // /**
    //  * Getter of the attribute contributorCode
    //  *
    //  * @return string the contributo code
    //  * @example echo $contributor->getContributorCode();
    //  * @author Johnny Charvet <charvetjohnny@outlook.fr>
    //  */
    // function getContributorCode():string
    // {
    //     return $this->contributorCode;
    // }

    /**
     * Getter of the salary attribute
     * @example echo $contributor->getSalary(); 
     * @return float  the salary 
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function getSalary():float
    {
        return $this->salary;
    }

    /**
     * Setter of the salary attribute
     * @param float $_newSalary the new salary to set
     * @example $contributor->setSalary(2200);
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function setSalary(float $_newSalary)
    {
        $this->salary= $_newSalary;
    }

    /**
     * Getter of the otherIncome attribute
     * @example echo $contributor->getOtherIncome();
     * @return float the other income of the Contributor
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function getOtherIncome():float
    {
        return $this->otherIncome;
    }

    /**
     * Setter of the otherIncome attribute
     * @param float $_newOtherIncome the new other income to set
     * @example $contributor->setOtherIncome(5100);
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function setOtherIncome(float $_newOtherIncome)
    {
        $this->salary= $_newOtherIncome;
    }

    /**
     * Used for calculate the loads of a Contributor, percent of fee depends of age of the contributor
     * @example  echo $contributor->calculateLoads();
     * @return float the loads of the Contributor
     * @author Johnny Charvet <charvetjohnny@outlook.fr>
     */
    function calculateLoads():float
    {
        $today =new DateTime();
        $interval =$today->diff(parent::getDateOfBirth());
        if($this->salary>0)
        {  
            $fee= ($this->salary*$this->SALARY_PERCENT_FEE);

            if($this->otherIncome>0)
            {
                $fee+=($this->otherIncome*$this->OTHER_INCOME_PERCENT_FEE);
            }
        }
        else
        {
            return 0;
        }
        return ($interval->format('%y')>=55)? $fee:$fee/2;
    }
}