<?php
require_once 'connect.php';


$id = $_GET['id'];
mysqli_query($connect,"DROP TRIGGER IF EXISTS del");
mysqli_query($connect, "CREATE DEFINER = `root`@`localhost` TRIGGER `del` BEFORE DELETE ON Staff FOR EACH ROW INSERT INTO Deleted SELECT * FROM Staff WHERE id = '$id'");
mysqli_query($connect,"DELETE FROM `Staff` WHERE id = '$id'");
header('Location:../indexs/select.php')
?>