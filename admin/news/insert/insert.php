<?php
session_start();
// if(isset($_SESSION["typeuser"]) && $_SESSION["typeuser"]==="admin"){
// require_once("../../config/connection.php");
if(isset($_POST["add"])){
$headr=$_POST["headr"];
$chick=$_POST["chick"];
$info=$_POST["info"];
$file = $_FILES['image'];
$image=$file['name'];
$time=time();
$data_add=date("Y-m-d",$time);
$user_add="0";
//$user_add=$_SESSION["username"];
move_uploaded_file($file["tmp_name"],"image/".$time.basename($file['name']));

$sql="INSERT INTO news(topic,user_add,headr,image,info,DATE_ADD,chick) VALUES('1','$user_add','$headr','$image','$info','$data_add','$chick');";
$result=mysqli_query($con,$sql);
}
//}
?>