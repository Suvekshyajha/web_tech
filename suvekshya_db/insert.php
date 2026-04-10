<?php
include "suvekshya_db.php";

$students = [
    ["Ram", "101", 85],
    ["Sita", "102", 35],
    ["Hari", "103", 60],
    ["Gita", "104", 78],
    ["Nabin", "105", 25]
];

foreach ($students as $s) {
    $name = $s[0];
    $roll = $s[1];
    $marks = $s[2];

    $result = ($marks >= 40) ? "Pass" : "Fail";

    $sql = "INSERT INTO students (Student_name, RollNumber, marks_obtained, result)
            VALUES ('$name', '$roll', $marks, '$result')";

    $conn->query($sql);
}

echo "5 students inserted successfully!";
?>