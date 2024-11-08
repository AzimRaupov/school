<?php
    require_once('../../config/connection.php');
    print_r($_POST);
    print_r($_FILES);
    if(isset($_POST['update']) && !empty($_POST['update'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $image = $title.'-'.time().'.jpg';
        move_uploaded_file($_FILES["image"]["tmp_name"],'../../assets/images/geleries/'.$image);
        
        $sql ="update geleries set title='$title', `image`= '$image', `description`= '$description' where id = $id;";
        $result = mysqli_query( $conn,   $sql );
        
        header( "Location:select.php?status=success");
    }
?>