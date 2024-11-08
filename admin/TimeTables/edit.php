<?php 
if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    $id = intval($_GET["id"]);
    require_once('../../config/connection.php');
    $sql = "SELECT * FROM TimeTables where id = $id;";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
} else {
  header('Location:select.php');  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../config/bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="update.php" method="get">
                    <label for="">teacher_id</label><br>
                    <input class="form-control" value="<?=$row['teacher_id'];?>" name="teacher_id" type="text"><br>
                    <label for="">classes_id</label><br>
                    <input class="form-control" value="<?=$row['classes_id'];?>" name="classes_id" type="text"><br>
                    <label for="">clock_id</label><br>
                    <input class="form-control" value="<?=$row['clock_id'];?>" name="clock_id" type="text"><br>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input class="btn btn-primary" type="submit">
                </form>
            </div>
        </div>
    </div>
</body>

</html>