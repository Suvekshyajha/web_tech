<?php
echo "<h2>Inheritance & Polymorphism</h2>";

class Lecturer {
    public $name, $subject, $salary;

    function __construct($n, $s, $sal) {
        $this->name = $n;
        $this->subject = $s;
        $this->salary = $sal;
    }

    function getInfo() {
        echo "Lecturer: $this->name | $this->subject | Rs.$this->salary <br>";
    }
}

class Parttime extends Lecturer {
    public $hours;

    function __construct($n, $s, $sal, $h) {
        parent::__construct($n, $s, $sal);
        $this->hours = $h;
    }

    function getInfo() {
        echo "Part-time: $this->name | $this->subject | Rs.$this->salary | Hours: $this->hours <br>";
    }
}

class Fulltime extends Lecturer {
    public $dept;

    function __construct($n, $s, $sal, $d) {
        parent::__construct($n, $s, $sal);
        $this->dept = $d;
    }

    function getInfo() {
        echo "Full-time: $this->name | $this->subject | Rs.$this->salary | Dept: $this->dept <br>";
    }
}

// Objects
$l  = new Lecturer("Sharma", "Math", 50000);
$pt = new Parttime("Sita", "English", 20000, 15);
$ft = new Fulltime("Hari", "Science", 60000, "BCA");

// Polymorphism
$l->getInfo();
$pt->getInfo();
$ft->getInfo();

echo "<br>Inheritance: Child classes reuse properties<br>";
echo "Polymorphism: Same method (getInfo) behaves differently";
?>
