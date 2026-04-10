<?php
include "suvekshya_db.php";

$sql = "SELECT s.Student_name, s.marks_obtained, sd.parent_name, sd.email, sd.address, sd.mobile 
        FROM students s 
        JOIN student_details sd ON s.std_id = sd.std_id 
        WHERE s.result = 'Fail'";

$result = mysqli_query($conn, $sql);
?>

<h3>Failed Students - Parent Details</h3>

<table border="1">
    <tr>
        <th>Student Name</th>
        <th>Marks</th>
        <th>Address</th>
        <th>Parent Name</th>
        <th>Mobile</th>
        <th>Email</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['Student_name']; ?></td>
        <td><?php echo $row['marks_obtained']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['parent_name']; ?></td>
        <td><?php echo $row['mobile']; ?></td>
        <td><?php echo $row['email']; ?></td>
    </tr>
    <?php } ?>
</table>