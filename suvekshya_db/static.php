<?php
class Lecturer {
    public static $count = 0;

    function __construct() {
        self::$count++;
    }

    public static function getCount() {
        return self::$count;
    }
}

// Creating objects
new Lecturer();
new Lecturer();
new Lecturer();

// Access static member
echo "Total Lecturers: " . Lecturer::getCount();
?>
