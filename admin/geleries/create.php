<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <label for="">Имя:</label><br>
        <input type="text" name="title"><br>
        <label for="">Описание:</label><br>
        <textarea name="description">
        </textarea><br>
        <label for="">Фото:</label><br>
        <input type="file" name="image"><br>
        <input type="submit" name="add" value="Send">
    </form>
</body>
</html>