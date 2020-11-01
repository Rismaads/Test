<?php 
    class Company{
        public $name;

        public function setCompanyName($name){
            $this->name= $name;
        }

        public function getCompanyName(){
            return "Perusahaan : $this->name";
        }
    }

    class Department{
        public $name;

        public function setDepartmentName($name){
            $this->name= $name;
        }

        public function getDepartmentName(){
            return "Departement : $this->name";
        }
    }

    class Employee{
        public $name;
        public $title =  'QA Engineer';
        public $salary = 100000;

        public function setEmployeeName($name){
            $this->nameEmployee = $name;
        }

        public function getEmployeeTitle(){
            return "Jabatan :  $this->title";
        }

        public function getEmployeeProfile(){
            return "
            Nama : $this->nameEmployee <br>
            Jabatan : $this->title <br>
            Gaji : $this->salary /day
            ";
        }

        public function getEmployeeMonthlySalary($day){
            return "Gaji : " . $this->salary * $day;
        }
    }

    $company = new Company;

    $company->setCompanyName('PT DOT');
    echo $company->getCompanyName() . '<br>' ;

    $department = new Department;

    $department->setDepartmentName('IT');
    echo $department->getDepartmentName() . '<br>' ;

    $employee = new Employee;

    $employee->setEmployeeName('Risma Ayu Dwi Septyani');
    echo $employee->getEmployeeTitle() . '<br>' ; 
    echo $employee->getEmployeeMonthlySalary(30) . '<br>' ; 

    echo "<br>Profil pegawai : <br>";
    echo $employee->getEmployeeProfile() . '<br>' ; 
    
?>