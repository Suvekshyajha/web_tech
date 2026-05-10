<?php
include "suvekshya_db.php";

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id == 0) die("Invalid ID.");

$row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM students WHERE std_id = $id"));

if (!$row) die("Student not found.");

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $marks = intval($_POST['marks']);
    $status = ($marks >= 40) ? "Pass" : "Fail";

    mysqli_query($conn, "UPDATE students SET Student_name='$name', marks_obtained='$marks', result='$status' WHERE std_id=$id");
    header("Location: display.php");
    exit();
}
?>

<form method="POST" action="edit.php?id=<?php echo $id; ?>">
    Name: <input type="text" name="name" value="<?php echo $row['Student_name']; ?>"><br>
    Marks: <input type="number" name="marks" value="<?php echo $row['marks_obtained']; ?>"><br>
    <input type="submit" name="update" value="Update">
</form>