<?php
echo "<h2>Inheritance and Polymorphism Demo</h2>";

class Lecturer {
    public $name;
    public $subject;
    public $salary;

    function __construct($name, $subject, $salary) {
        $this->name    = $name;
        $this->subject = $subject;
        $this->salary  = $salary;
    }

    function getInfo() {
        echo " <b>Lecturer</b> | Name: $this->name | Subject: $this->subject | Salary: Rs.$this->salary <br>";
    }
}

class Parttime extends Lecturer {
    public $hoursPerWeek;

    function __construct($name, $subject, $salary, $hoursPerWeek) {
        parent::__construct($name, $subject, $salary);
        $this->hoursPerWeek = $hoursPerWeek;
        echo " Parttime object created for: <b>$name</b> (inherits from Lecturer)<br>";
    }

    // Polymorphism - same method name, different output
    function getInfo() {
        echo " <b>Part-time</b> | Name: $this->name | Subject: $this->subject | Salary: Rs.$this->salary | Hours/Week: $this->hoursPerWeek <br>";
    }
}

class Fulltime extends Lecturer {
    public $department;

    function __construct($name, $subject, $salary, $department) {
        parent::__construct($name, $subject, $salary);
        $this->department = $department;
        echo " Fulltime object created for: <b>$name</b> (inherits from Lecturer)<br>";
    }

    // Polymorphism - same method name, different output
    function getInfo() {
        echo " <b>Full-time</b> | Name: $this->name | Subject: $this->subject | Salary: Rs.$this->salary | Department: $this->department <br>";
    }
}

echo "<h3>--- Creating Objects ---</h3>";
$l  = new Lecturer("Mr. Sharma", "Math",    50000);
$pt = new Parttime("Ms. Sita",   "English", 20000, 15);
$ft = new Fulltime("Mr. Hari",   "Science", 60000, "BCA");

echo "<h3>--- Calling getInfo() — Polymorphism in action ---</h3>";
echo "Same method getInfo() gives different output for each class:<br><br>";
$l->getInfo();
$pt->getInfo();
$ft->getInfo();

echo "<br> Inheritance: Parttime and Fulltime reuse name, subject, salary from Lecturer<br>";
echo " Polymorphism: All three use getInfo() but each prints differently<br>";
?>