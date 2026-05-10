<?php
include "suvekshya_db.php";

$students = mysqli_query($conn, "SELECT * FROM students ORDER BY marks_obtained ASC");
$passed   = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM students WHERE result='Pass'"));
$failed   = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM students WHERE result='Fail'"));
?>

<h3>Student Results (Ascending Order)</h3>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Marks</th>
        <th>Result</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($students)) { ?>
    <tr>
        <td><?php echo $row['std_id']; ?></td>
        <td><?php echo $row['Student_name']; ?></td>
        <td><?php echo $row['marks_obtained']; ?></td>
        <td><?php echo $row['result']; ?></td>
    </tr>
    <?php } ?>
</table>

<p>Total Passed: <?php echo $passed['total']; ?></p>
<p>Total Failed: <?php echo $failed['total']; ?></p>