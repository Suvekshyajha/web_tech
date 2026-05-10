<?php
echo "<h2>Access Modifiers + Getter/Setter with Inheritance & Polymorphism</h2>";

class Lecturer {
    public $name;          // public → accessed anywhere
    protected $subject;    // protected → accessed in child classes
    private $salary;       // private → accessed via getter/setter

    function __construct($name, $subject, $salary) {
        $this->name = $name;
        $this->subject = $subject;
        $this->setSalary($salary); // setter used
    }

    // Setter (for private property)
    function setSalary($salary) {
        $this->salary = $salary;
    }

    // Getter (for private property)
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
        // accessing protected + getter
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

// Objects
$l  = new Lecturer("Ram", "Math", 40000);
$pt = new Parttime("Sita", "English", 20000, 12);
$ft = new Fulltime("Hari", "Science", 60000, "BCA");

// Output
$l->getInfo();
$pt->getInfo();
$ft->getInfo();
?>
