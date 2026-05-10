<?php
include 'suvekshya_db.php';

// Create student_details table
$sql = "CREATE TABLE student_details (
    detail_id INT AUTO_INCREMENT PRIMARY KEY,
    std_id INT,
    address VARCHAR(150),
    parents_name VARCHAR(100),
    mobile VARCHAR(15),
    email VARCHAR(100),
    FOREIGN KEY (std_id) REFERENCES students(std_id)
)";

$conn->query($sql);

// Insert matching records (IMPORTANT: std_id must exist in students)
$sql_insert = "INSERT INTO student_details (std_id, address, parents_name, mobile, email) VALUES
(4, 'Kathmandu', 'Ramesh Sharma', '9811111111', 'ram@gmail.com'),
(2, 'Lalitpur', 'Suresh Karki', '9822222222', 'sita@gmail.com'),
(3, 'Bhaktapur', 'Mahesh Thapa', '9833333333', 'hari@gmail.com')";

if ($conn->query($sql_insert) === TRUE) {
    echo "Student details inserted successfully";
} else {
    echo "Error: " . $conn->error;
}
?>