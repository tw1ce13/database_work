<?php

require_once '../action/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL</title>
</head>
<body>
    <table class = "tables">
        <tr>
            <th>Name</th>
            <th>Telephone</th>
        </tr>
        <?php
        mysqli_query($connect,"Drop view if exists People");
        mysqli_query($connect, "Create view People as Select Name, Telephone from Staff");
        $data = mysqli_query($connect,"Select * from People");
        $data = mysqli_fetch_all($data);
        foreach ($data as $datas){
            ?>
            <tr>
                <td><?= $datas[0]?></td>
                <td><?= $datas[1]?></td>
        </tr>
            <?php
        }
        ?>
    </table>
    <input class="exit" type="button" onclick="window.location.href = '../index.php';" value="Назад"/>
</body>
</html>