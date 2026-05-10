<?php
include "suvekshya_db.php";

// Fetch data
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
</head>
<body>

<h2>Student Details</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Roll No</th>
        <th>Marks</th>
        <th>Result</th>
        <th>Action</th>
    </tr>

    <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
            <td><?php echo $row['std_id']; ?></td>
            <td><?php echo $row['Student_name']; ?></td>
            <td><?php echo $row['RollNumber']; ?></td>
            <td><?php echo $row['marks_obtained']; ?></td>
            <td><?php echo $row['result']; ?></td>

            <td>
                <!-- Edit Button -->
                <a href="edit.php?id=<?php echo $row['std_id']; ?>">Edit</a>

                <!-- Delete Button -->
                <a href="delete.php?id=<?php echo $row['std_id']; ?>" 
                   onclick="return confirm('Are you sure?');">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>

</table>

</body>
</html>