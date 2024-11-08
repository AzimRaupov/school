<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galaries</title>
</head>
<body>
    <?php
    require_once('../../config/connection.php');
    $sql = "SELECT * FROM geleries;";
    $result = mysqli_query($conn,$sql);
    $rowGeleries = mysqli_fetch_assoc($result);
    ?>
    <form action="update.php" method="post" enctype="multipart/form-data">
        <label for="">Имя:</label><br>
        <input type="text" name="title" value="<?=$rowGeleries['title']?>"><br>
        <label for="">Описание:</label><br>
        <textarea name="description" value="<?=$rowGeleries['description']?>">
        </textarea><br>
        <label for="">Фото:</label><br>
        <input type="file" name="image" value="<?=$rowGeleries['image']?>"><br>
        <input type="hidden" name="id" value="<?=$rowGeleries['id']?>">
        <input type="submit" name="update" value="Send">
    </form>
</body>
</html>