<?php
    require_once("../../config/connection.php");
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM geleries WHERE id = $id;";
        mysqli_query($conn, $sql);
        
        header("Location:select.php");  
    } 
?>