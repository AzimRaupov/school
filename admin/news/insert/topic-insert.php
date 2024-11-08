<?php
session_start();
// if(isset($_SESSION["typeuser"]) && $_SESSION["typeuser"]==="admin"){
// require_once("../../config/connection.php");
require_once("config/headr.php");
require_once("config/nav.php");
if(isset($_POST["add"])){
   $topic=$_POST["topic"];
    
    $sql="INSERT INTO topic(topic) VALUES('$topic');";
    $result=mysqli_query($con,$sql);
    }


// }

?>