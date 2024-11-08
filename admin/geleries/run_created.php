<?php
require_once("../config/connection.php");
$sql = "CREATE TABLE geleries(
        id INT AUTO_INCREMENT,
        title VARCHAR(50),
        description TEXT,
        image VARCHAR(100),
        PRIMARY KEY(id)
        );";
$res = mysqli_query($conn, $sql);
if($res){
    echo "Created table geleries";
} else {
    echo "Error";
}
?>