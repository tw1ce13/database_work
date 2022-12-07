<?php

$connect = mysqli_connect('localhost', 'root', '', 'Workers');

if (!$connect){
    echo 'Ошибка в подключении';
}
?>