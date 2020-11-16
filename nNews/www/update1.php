<?
header("location: edit.php");
include "connection.php";

$id = $_POST['id'];
$header = $_POST['header'];
$announcement = $_POST['announcement'];
$content = $_POST['content'];
$img = $_POST['img'];


$query = "UPDATE `news`.`news` SET `header` = '$header',
`content` = '$content',
`announcement` = '$announcement',
`img` = '$img',
`timestamp` = NOW() WHERE `news`.`id` ='$id';";
$result = mysqli_query($link,$query);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
 
  <title>Document</title>
</head>
<body>
  <h3>GooD! <a href="edit.php">Go to edit.</a></h3> <br>
  
</body>
</html>