<?php
require_once('../../config/connection.php');
$sql = "CREATE TABLE TimeTables(
        id INT AUTO_INCREMENT,
        teacher_id VARCHAR(50),
        classes_id INT(3),
        clock_id DATE,
        PRIMARY KEY(id)
        );";
$res = mysqli_query($conn, $sql);
if ($res){
    echo "Created table TimeTables";
}else{
    echo "ERROR";
}
?>