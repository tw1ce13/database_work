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
            <th>ID</th>
            <th>Name</th>
            <th>Telephone</th>
            <th>Opportunity</th>
            <th>Salary</th>
        </tr>
        <?php

        $data = mysqli_query($connect, "Select * from Staff where Salary > 25000");
        $data = mysqli_fetch_all($data);
        foreach ($data as $datas){
            ?>
            <tr>
                <td><?= $datas[0]?></td>
                <td><?= $datas[1]?></td>
                <td><?= $datas[2]?></td>
                <td><?= $datas[3]?></td>
                <td><?= $datas[4]?></td>
        </tr>
            <?php
        }
        ?>
    </table>
    <br>
    <br>
    <input class="exit" type="button" onclick="window.location.href = '../index.php';" value="Назад"/>
</body>
</html>