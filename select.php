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

        $data = mysqli_query($connect, "Select * from Staff");
        $data = mysqli_fetch_all($data);
        foreach ($data as $datas){
            ?>
            <tr>
                <td><?= $datas[0]?></td>
                <td><?= $datas[1]?></td>
                <td><?= $datas[2]?></td>
                <td><?= $datas[3]?></td>
                <td><?= $datas[4]?></td>
                <td><a href="update.php?id=<?= $datas[0]?>">Update</a></td>
                <td><a style = "color: #CD5C5C;"href="../action/delete.php?id=<?= $datas[0]?>">Delete</a></td>
        </tr>
            <?php
        }
        ?>
    </table>
    <?php
        $flag = mysqli_query($connect,"Select * from Deleted");
        $flag = mysqli_fetch_all($flag);
        if ($flag){
    ?>
        <a class = "exit " href="../action/trigger_action.php">Вернуть удаленные записи</a>
        <?php
        }elseif(!$flag){

        }
        ?>
    <input class="exit" type="button" onclick="window.location.href = '../index.php';" value="Назад"/>
</body>
</html>