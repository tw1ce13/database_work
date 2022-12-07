<?php
require_once 'connect.php';

$ID = $_POST['id'];
$Name = $_POST['name'];
$Telephone = $_POST['tel'];
$Opportunity = $_POST['opp'];
$Salary = $_POST['sal'];

mysqli_query($connect, "UPDATE Staff SET Name='$Name',  Telephone ='$Telephone', Opportunity='$Opportunity', Salary='$Salary' Where id = '$ID'");
header('Location:../indexs/select.php');
?>




