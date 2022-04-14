<?php
namespace Wipro\Employee;
use Wipro\Employee\Address;

class Employee
{
    private int $id;
    private string $empCode;
    private string $name;
    private int $dept;
    private Employee $manager;
    private Address $address;
    private $startdate;
    private $enddate;

    public function __construct($name, $dept, $address){
        $this->name = $name;
        $this->dept = $dept;
        $this->address = $address;

        //last employee number logic
        $number = 101;

        $this->empCode = substr($name,0,1).$number;

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getDept(): int
    {
        return $this->dept;
    }

    /**
     * @param int $dept
     */
    public function setDept(int $dept): void
    {
        $this->dept = $dept;
    }

    /**
     * @return Employee
     */
    public function getManager(): Employee
    {
        return $this->manager;
    }

    /**
     * @param Employee $manager
     */
    public function setManager(Employee $manager): void
    {
        $this->manager = $manager;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     */
    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * @param mixed $startdate
     */
    public function setStartdate($startdate): void
    {
        $this->startdate = $startdate;
    }

    /**
     * @return mixed
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * @param mixed $enddate
     */
    public function setEnddate($enddate): void
    {
        $this->enddate = $enddate;
    }

    function checkNum($number) {
        if($number>1) {
            throw new Exception("Value must be 1 or below");
        }
        return true;
    }

    public function getEmployeeData(){
        try {
            checkNum(2);
            //If the exception is thrown, this text will not be shown
            echo 'If you see this, the number is 1 or below';
        }

//catch exception
        catch(\Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }

    }







}