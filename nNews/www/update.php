

<?
include "connection.php";

$id = $_GET['id'];
$query = "SELECT * FROM `news` WHERE `id`='$id' ";
$result = mysqli_query($link,$query);
$result = mysqli_fetch_assoc($result);







?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Update</title>
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
  <h3>Update news</h3>
  <div> <a  href="edit.php">Back</a></div>
  <br>
<form method="POST" action="Update1.php">

  <input type="hidden" name="id" value="<?=$result['id'] ?>"> 

  <input name="header" type="text" placeholder="header" value="<?=$result['header'] ?>" /> <br>
  <input name="announcement" type="text" placeholder="announcement" value="<?=$result['announcement'] ?>"/> <br>
  <textarea name="content" type="text" placeholder="content" > 
    <?=$result['content'] ?> </textarea> 
  <br>
  <input name="img" type="text" placeholder="img" value="<?=$result['img'] ?>"/> <br>
  <button type="submit">Update</button>
 </form>

</body>
</html>
