<?php
include "suvekshya_db.php";

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE std_id = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: display.php");
} else {
    echo "Error deleting record";
}
?>