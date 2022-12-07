<?php

require_once '../action/connect.php';

$data_id = $_GET['id'];
$data = mysqli_query($connect,"Select * from Staff where id = '$data_id'");
$data = mysqli_fetch_assoc($data);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../action/update_action.php" method = "post">
        <input type="hidden" name = "id" value ="<?= $data['id']?>">
        <p>Name</p>
        <input type="text" name = "name" value ="<?= $data['Name']?>">
        <p>Telephone</p>
        <input type="text" name = "tel" value ="<?= $data['Telephone']?>">
        <p>Opportunity</p>
        <input type="number" name = "opp" value ="<?= $data['Opportunity']?>">
        <p>Salary</p>
        <input type="number" name = "sal" value ="<?= $data['Salary']?>">
        <br>
        <br>
        <button  class="exit" type = "submit">Обновить запись</button>
    </form>
    <br>
    <br>
    <input class="exit" type="button" onclick="window.location.href = '../index.php';" value="Назад"/>
</body>
</html>