<?php
require_once "connect.php";

mysqli_query($connect,"DROP TRIGGER IF EXISTS comeback");
mysqli_query($connect, "CREATE DEFINER = `root`@`localhost` TRIGGER `comeback` BEFORE DELETE ON Deleted FOR EACH ROW INSERT INTO Staff SELECT * FROM Deleted");
mysqli_query($connect,"DELETE FROM `Deleted` WHERE id > 0");
header('Location:../indexs/select.php')
?>