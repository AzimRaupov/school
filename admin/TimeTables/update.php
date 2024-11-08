<?php 
require_once("../../config/connection.php");
if (isset($_GET["teacher_id"]) && !empty($_GET["teacher_id"])
&& isset($_GET["classes_id"]) && !empty($_GET["classes_id"])
&& isset($_GET["clock_id"]) && !empty($_GET["clock_id"])) {
    $teacher_id = $_GET['teacher_id'];
    $classes_id = $_GET['classes_id'];
    $clock_id = $_GET['clock_id'];
    $id = $_GET['id'];
    $sql = "update Timetables set teacher_id = '$teacher_id', classes_id = '$classes_id', clock_id = '$clock_id', id = $id;";
    $result = mysqli_query($conn, $sql); 
}
    header("Location:select.php");
?>