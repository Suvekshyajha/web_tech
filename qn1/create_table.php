<?php
include 'suvekshya_db.php';

// SQL query to create table
$sql = "CREATE TABLE students (
    std_id INT AUTO_INCREMENT PRIMARY KEY,
    Student_name VARCHAR(100) NOT NULL,
    RollNumber INT NOT NULL,
    marks_obtained INT NOT NULL,
    result ENUM('Pass','Fail') NOT NULL
)";

// Execute query
if ($conn->query($sql) === TRUE) {
    echo "Table 'students' created successfully in suvekshya_db";
} else {
    echo "Error: " . $conn->error;
}
?>