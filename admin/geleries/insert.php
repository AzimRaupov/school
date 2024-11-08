<?php
    require_once('../../config/connection.php');
    print_r($_POST);
    print_r($_FILES);
    if(isset($_POST['add']) && !empty($_POST['add'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];

        $image = $title.'-'.time().'.jpg';
        move_uploaded_file($_FILES["image"]["tmp_name"],'../../assets/images/geleries/'.$image);
        $sql ="INSERT INTO geleries(title, `description`, `image`)
	           VALUES('$title', '$description', '$image');";
        echo $sql;
        $result = mysqli_query( $conn,   $sql );
        
        header("Location:select.php");
    }
?>