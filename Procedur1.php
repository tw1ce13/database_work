<?php
require_once '../action/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class = "tables">
        <tr>
            <th>Количество человек в таблице Staff</th>
        </tr>
        <?php
        mysqli_query($connect,"Drop PROCEDURE IF EXISTS people_count");
        mysqli_query($connect, "CREATE DEFINER=`root`@`localhost` PROCEDURE people_count() COMMENT 'считает количество человек' NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER SELECT COUNT(*) from Staff");
        $data = mysqli_query($connect,"CALL people_count()");
        $data = mysqli_fetch_all($data);
        foreach ($data as $datas)
        {
        ?>
        <tr>
            <td><?= $datas[0]?></td>
        </tr>
        <?php
        }
        ?>
</table>
<br>
<input class="exit" type="button" onclick="window.location.href = '../index.php';" value="Назад"/>
</body>
</html>