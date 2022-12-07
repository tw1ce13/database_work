<?php

require_once '../action/connect.php';

$Salary = mysqli_query($connect, "Select max(Salary) from Staff");
$Salary = mysqli_fetch_all($Salary);
$Salary = implode($Salary[0]);
mysqli_query($connect,"Drop PROCEDURE IF EXISTS max_salary");
mysqli_query($connect, "CREATE DEFINER=`root`@`localhost` PROCEDURE max_salary() NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER Select * from Staff where Salary = '$Salary'");
$data = mysqli_query($connect,"CALL max_salary()");
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
            <th>ID</th>
            <th>Name</th>
            <th>Telephone</th>
            <th>Opportunity</th>
            <th>Salary</th>
        </tr>
        <?php
        $data = mysqli_fetch_all($data);
        foreach ($data as $datas)
        {
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
<input class="exit" type="button" onclick="window.location.href = '../index.php';" value="Назад"/>
</body>
</html>

