


<?

if (isset($_POST['header']) && isset($_POST['announcement'])  && isset($_POST['content'])  && isset($_POST['img'])) {
  

$id = $_POST['id'];
$header = $_POST['header'];
$announcement = $_POST['announcement'];
$content = $_POST['content'];
$img = $_POST['img'];


include "connection.php";

  $query = "INSERT INTO  news(id, header, content, announcement, img, timestamp) VALUES('$id', '$header', '$content', '$announcement', '$img', NOW())";

  $result = mysqli_query($link, $query) or die( mysqli_error($link));
  if (!$result) {
   echo 'Error adding news:' . $mysqli_error($link) ; 
  exit();
}else{
  mysqli_close($link);
  
}
  
}  else{
  echo  "<h3>Add news</h3>" ;
}
  
  ?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add</title>
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
  
  <div> <a  href="edit.php">Back</a></div>
  <br>
<form method="POST" action="">
  <input name="header" type="text" placeholder="header"/> <br>
  <textarea name="content" type="text" placeholder="content" ></textarea><br>
  <input name="announcement" type="text" placeholder="announcement"/><br>
  <input name="img" type="text" placeholder="img"/><br>
  <input type="submit" value="submit"/>
 </form> <br>
</body>
</html>




