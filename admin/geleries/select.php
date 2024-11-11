<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaries</title>
</head>
<body>
    <a href="create.php">Add</a>
    <?php
    require_once('../../config/connection.php');
    $sql = "SELECT * FROM geleries;";
    $result = mysqli_query($conn,$sql);
    ?>
    <table border=1>
        <tr>
            <td>id</td>
            <td>Title</td>
            <td>Description</td>
            <td>Image</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        <?php
            while( $row = mysqli_fetch_assoc($result) ){
        ?>
        <tr>
            <td><?=$row['id'];?></td>
            <td><?=$row['title'];?></td>
            <td><?=$row['description'];?></td>
            <td><img src="../../assets/images/geleries/<?=$row['image'];?>" alt="" width="100"></td>
            <td><a href="edit.php?id=<?=$row['id'];?>">Edit</a></td>
            <td><a href="delete.php?id=<?=$row['id'];?>">Delete</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>