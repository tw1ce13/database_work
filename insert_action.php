<?php

require_once 'connect.php';

$ID = $_POST['id'];
$Name = $_POST['name'];
$Telephone = $_POST['tel'];
$Opportunity = $_POST['opp'];
$Salary = $_POST['sal'];

mysqli_query ($connect, "INSERT INTO `Staff` (`id`, `Name`, `Telephone`, `Opportunity`, `Salary`) VALUES ('$ID', '$Name', '$Telephone', '$Opportunity', '$Salary')");
header('Location:../indexs/select.php')
?>