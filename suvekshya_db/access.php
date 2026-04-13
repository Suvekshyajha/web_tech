<?php
echo "<h2>Access Modifiers</h2>";

class Lecturer {
    public $name;
    protected $subject;
    private $salary;

    function __construct($name, $subject, $salary) {
        $this->name = $name;
        $this->subject = $subject;
        $this->setSalary($salary);
    }

    function setSalary($salary) {
        if($salary > 0) $this->salary = $salary;
    }

    function getSalary() {
        return $this->salary;
    }

    function getInfo() {
        echo "Lecturer: $this->name | $this->subject | Rs.".$this->getSalary()."<br>";
    }
}

class Parttime extends Lecturer {
    private $hours;

    function __construct($name, $subject, $salary, $hours) {
        parent::__construct($name, $subject, $salary);
        $this->hours = $hours;
    }

    function getInfo() {
        echo "Part-time: $this->name | $this->subject | Rs.".$this->getSalary()." | Hours: $this->hours<br>";
    }
}

class Fulltime extends Lecturer {
    private $dept;

    function __construct($name, $subject, $salary, $dept) {
        parent::__construct($name, $subject, $salary);
        $this->dept = $dept;
    }

    function getInfo() {
        echo "Full-time: $this->name | $this->subject | Rs.".$this->getSalary()." | Dept: $this->dept<br>";
    }
}

// Different inputs
$l  = new Lecturer("Anita", "Computer", 45000);
$pt = new Parttime("Ramesh", "Account", 18000, 10);
$ft = new Fulltime("Sunita", "Management", 55000, "BBA");

// Output
$l->getInfo();
$pt->getInfo();
$ft->getInfo();
?>
