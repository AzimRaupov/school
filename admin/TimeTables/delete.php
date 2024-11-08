<?php
require_once("../../config/connection.php");
if (isset($_GET['id']) && !empty(trim($_GET['id']))){
    $id = trim($_GET['id']);
    $sql = "DELETE FROM TimeTables WHERE id = $id;";
    $result = mysqli_query($conn, $sql);
}
header('Location:select.php');
?>