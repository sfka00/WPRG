<?php

interface Employee{
    function getSalary();
    function setSalary($salary);
    function getRole();

}

class Manager implements Employee
{
    private $salary;
    private $employees = [];

    function setSalary($salary)
    {
        $this->salary = $salary;
    }

    function getSalary()
    {
        return $this->salary;
    }

    function getRole()
    {
        return __CLASS__;
    }

    function addEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    function getEmployees()
    {
        return $this->employees;
    }
}


class Developer implements Employee{
    private $salary;
    private $programmingLanguage;
    function setSalary($salary)
    {
        $this->salary = $salary;
    }

    function getSalary()
    {
        return $this->salary;
    }

    function getRole()
    {
        return __CLASS__;
    }

    function setProgrammingLanguage($programmingLanguage){
        $this->programmingLanguage = $programmingLanguage;
        }


    function getProgrammingLanguage(){
        return $this->programmingLanguage;
    }
}

class Designer implements Employee{
    private $salary;
    private $designingTool;
    function setSalary($salary)
    {
        $this->salary = $salary;
    }

    function getSalary()
    {
        return $this->salary;
    }

    function getRole()
    {
        return __CLASS__;
    }

    function setDesigningTool($designingTool){
        $this->designingTool = $designingTool;
    }
    function getDesigningTool(){
        return $this->designingTool;
}

}

$dev = new Developer();
$dev->setSalary(6000);
$dev->setProgrammingLanguage("PHP");

$des = new Designer();
$des->setSalary(5000);
$des->setDesigningTool("Canva");

$mng = new Manager();
$mng->setSalary(10000);
$mng->addEmployee($des);
$mng->addEmployee($dev);

echo "Jan: " . $mng->getSalary() . " " . $mng->getRole() . "\n";
echo "Paweł: " . $des->getSalary() . " " . $des->getRole() . "\n";
echo "Piotr: " . $dev->getSalary() . " " . $dev->getRole() . "\n";





?>