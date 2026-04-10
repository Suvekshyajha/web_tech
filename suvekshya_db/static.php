<?php
echo "<h2>Static Members Demo</h2>";

class Lecturer {
    public $name;
    public static $count = 0; // shared by ALL objects

    function __construct($name) {
        $this->name = $name;
        self::$count++;
        echo "Object created for: <b>$name</b> | Total so far: <b>" . self::$count . "</b><br>";
    }

    public static function getCount() {
        return self::$count;
    }

    function display() {
        echo "Lecturer: <b>$this->name</b><br>";
    }
}

echo "<h3>--- Creating Lecturer Objects ---</h3>";
$l1 = new Lecturer("Mr. Sharma");
$l2 = new Lecturer("Ms. Sita");
$l3 = new Lecturer("Mr. Hari");

echo "<h3>--- Displaying All ---</h3>";
$l1->display();
$l2->display();
$l3->display();

echo "<h3>--- Static Method called WITHOUT object ---</h3>";
echo "Total Lecturers: <b>" . Lecturer::getCount() . "</b><br>";

echo "<br>Static \$count is shared — not separate per object<br>";
echo " Lecturer::getCount() called directly without creating any object<br>";
?>