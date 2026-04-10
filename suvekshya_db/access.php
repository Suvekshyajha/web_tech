<?php
echo "<h2>Access Modifiers, Getter and Setter Demo</h2>";

class Lecturer {
    public    $name;      // accessible anywhere
    protected $subject;   // accessible in class + child only
    private   $salary;    // accessible in this class only

    function __construct($name, $subject, $salary) {
        $this->name    = $name;
        $this->subject = $subject;
        $this->salary  = $salary;
    }

    function setSalary($salary) {
        if ($salary > 0) {
            $this->salary = $salary;
            echo " Salary updated to: Rs.<b>$salary</b><br>";
        } else {
            echo "Invalid salary! Must be greater than 0.<br>";
        }
    }

    function getSalary() {
        return $this->salary;
    }

    function setSubject($subject) {
        $this->subject = $subject;
        echo " Subject updated to: <b>$subject</b><br>";
    }

    function getSubject() {
        return $this->subject;
    }
}

class Fulltime extends Lecturer {
    public $department;

    function __construct($name, $subject, $salary, $department) {
        parent::__construct($name, $subject, $salary);
        $this->department = $department;
    }

    function getInfo() {
        // protected $subject accessible here, private $salary is NOT
        echo "🏢 Name: $this->name | Subject: $this->subject | Department: $this->department<br>";
    }
}

$ft = new Fulltime("Mr. Hari", "Science", 60000, "BCA");

echo "<h3>--- Displaying Info ---</h3>";
$ft->getInfo();

echo "<h3>--- Getter: Reading Private Salary ---</h3>";
echo "Current Salary: Rs.<b>" . $ft->getSalary() . "</b><br>";

echo "<h3>--- Setter: Updating Salary ---</h3>";
$ft->setSalary(75000);
echo "New Salary: Rs.<b>" . $ft->getSalary() . "</b><br>";

echo "<h3>--- Setter: Invalid Salary ---</h3>";
$ft->setSalary(-500);

echo "<h3>--- Setter: Updating Subject ---</h3>";
$ft->setSubject("Physics");
echo " New Subject: <b>" . $ft->getSubject() . "</b><br>";

echo "<h3>--- Access Modifier Test ---</h3>";
echo " Public  — \$ft->name    = " . $ft->name . "<br>";
echo " Protected — \$ft->subject is not directly accessible outside class<br>";
echo "Private  — \$ft->salary  is not directly accessible outside class<br>";
?>