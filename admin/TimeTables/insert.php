<?php
require_once('../../config/connection.php');
if (isset($_POST['teacher_id']) && !empty($_POST['teacher_id'])
&& isset($_POST['classes_id']) && !empty($_POST['classes_id'])) {
    $teacher_id = $_POST['teacher_id'];
    $classes_id = $_POST['classes_id'];
    $sql = "INSERT INTO TimeTables(teacher_id, classes_id)
            VALUES('$teacher_id', '$classes_id')";
    $result = mysqli_query($conn, $sql);
}
header("Location:select.php");
?>