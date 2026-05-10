<?php
include "suvekshya_db.php";

$highest = mysqli_fetch_assoc(mysqli_query($conn, "SELECT Student_name, marks_obtained FROM students ORDER BY marks_obtained DESC LIMIT 1"));
$lowest  = mysqli_fetch_assoc(mysqli_query($conn, "SELECT Student_name, marks_obtained FROM students ORDER BY marks_obtained ASC LIMIT 1"));
$stats   = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total, AVG(marks_obtained) AS average FROM students"));
?>

<h3>Class Statistics</h3>

<p>Highest Marks: <?php echo $highest['Student_name']; ?> (<?php echo $highest['marks_obtained']; ?>)</p>
<p>Lowest Marks:  <?php echo $lowest['Student_name'];  ?> (<?php echo $lowest['marks_obtained'];  ?>)</p>
<p>Total Students: <?php echo $stats['total']; ?></p>
<p>Average Marks: <?php echo round($stats['average'], 2); ?></p>