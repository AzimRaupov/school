<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once('../../config/connection.php');
    $sql = "SELECT * FROM TimeTables;";
    $result = mysqli_query($conn, $sql);
    ?>
    <table border="1">
        <tr>
            <td>id</td>
            <td>teacher_id</td>
            <td>classes_id</td>
            <td>clock_id</td>
            <td>Edit</a></td>
            <td>Delete</td>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?= $row[0]; ?></td>
                <td><?= $row[1]; ?></td>
                <td><?= $row[2]; ?></td>
                <td><?= $row[3]; ?></td>
                <td><a href="edit.php?id=<?= $row[0]; ?>">Edit</a></td>
                <td><a href="delete.php?id=<?= $row[0]; ?>">Delete</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>

</html>