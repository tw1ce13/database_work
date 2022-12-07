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
    <form action="../action/insert_action.php" method = "post">
        <p>ID</p>
        <input type="number" name = "id">
        <p>Name</p>
        <input type="text" name = "name">
        <p>Telephone</p>
        <input type="text" name = "tel">
        <p>Opportunity</p>
        <input type="number" name = "opp">
        <p>Salary</p>
        <input type="number" name = "sal">
        <br>
        <br>
        <button class = "exit" type = "submit">Добавить запись</button>
    </form>
    <br>
    <br>
    <input class="exit" type="button" onclick="window.location.href = '../index.php';" value="Назад"/>
</body>
</html>

