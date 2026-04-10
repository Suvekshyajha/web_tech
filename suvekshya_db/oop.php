
<?php
echo "<h2>Constructor and Destructor Demo</h2>";

class Student {
    public $name;
    public $marks;

    function __construct($name, $marks) {
        $this->name  = $name;
        $this->marks = $marks;
        echo " Constructor called — Object created for: <b>$name</b><br>";
    }

    function display() {
        $result = ($this->marks >= 40) ? "Pass" : "Fail";
        echo " Name: <b>$this->name</b> | Marks: <b>$this->marks</b> | Result: <b>$result</b><br>";
    }

    function __destruct() {
        echo " Destructor called — Object destroyed for: <b>$this->name</b><br>";
    }
}

echo "<h3>Creating Objects:</h3>";
$s1 = new Student("Ram", 75);
$s1->display();

$s2 = new Student("Sita", 35);
$s2->display();

$s3 = new Student("Hari", 50);
$s3->display();

echo "<h3>All display() done. Destructor runs automatically at end:</h3>";
?>

