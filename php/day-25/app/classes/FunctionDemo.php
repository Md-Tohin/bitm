<?php

namespace App\classes;

class FunctionDemo
{

    public $companyName, $salary, $personalName, $age, $status, $bloodGroup;

    public function test()
    {
        static $a = 0;     // function static scope example
        $a++;
        echo $a;
        echo "<br>";
    }

    public function personal($name, $age, $status, $companyName, $salary, $bloodGroup)
    {
        $this->personalInfo($name, $age, $status, $bloodGroup);
        $this->jobInfo($companyName, $salary);
    }

    public function jobInfo($company, $salary)
    {
        $this->companyName = $company;
        $this->salary = $salary;
        echo "The company name is : {$this->companyName} and he get's Salary: {$this->salary}";
    }

    public function personalInfo($name, $age, $status, $bloodGroup)
    {
        $this->personalName = $name;
        $this->age = $age;
        $this->status = $status;
        $this->bloodGroup = $bloodGroup;
        echo "The name of this person is : {$this->personalName} <br> Age: {$this->age} <br> Status : {$this->status} <br> Blood Group : {$this->bloodGroup} <br>";
    }

    public function summation()
    {
        // $c = $a + $b;
        echo "hoolo";
    }
}
