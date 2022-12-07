<?php require_once 'action/connect.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="indexs/style.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>
<body>
    <div class = "buttons">
        <br><br><br>
        <input class="text-field__input" type="button" onclick="window.location.href = '/indexs/select.php';" value="Show Table"/>
        <input class="text-field__input" type="button" onclick="window.location.href = '/indexs/insert.php';" value="Добавить запись в таблицу"/>
    </div>
    <br>
    <div div class = "buttons"">
            <input  class="text-field__input" type="button" onclick="window.location.href = 'indexs/view_all.php';" value="Все рабочие"/>
            <input  class="text-field__input" type="button" onclick="window.location.href = 'indexs/people_ns.php';" value="Имена и зарплаты рабочих"/>
            <input  class="text-field__input" type="button" onclick="window.location.href = 'indexs/view_nt.php';" value="Имена, номер телефона"/>
    </div>
    <br>
    <div div class = "buttons"">
            <input  class="text-field__input" type="button" onclick="window.location.href = 'indexs/Procedur1.php';" value="Процедура, выводящая количество человек"/>
            <input  class="text-field__input" type="button" onclick="window.location.href = 'indexs/Procedure2.php';" value="Процедура, выводящая самого опытного и с максимальной зарплатой"/>
    </div>
</body>
</html>