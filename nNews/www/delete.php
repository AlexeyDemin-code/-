<?
header("location: edit.php");
include "connection.php";
$id = $_GET['id'];


$query = "DELETE FROM `news`.`news` WHERE `id`='$id'";
$result = mysqli_query($link,$query);

?> 


