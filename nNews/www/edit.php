<?
include "connection.php";






$query = "SELECT id, header, content, announcement, img, timestamp FROM news ORDER BY timestamp DESC";
$result = mysqli_query($link,$query);


?> 




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>News</title>
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
  <h1>News</h1>
<div class="Redacror"> <a  href="index.php">Show news</a></div>
<div class="Redacror"> <a  href="add.php">Add news</a></div>
  
<? while ($row = mysqli_fetch_array($result)) 
   {  ?>


  <div class="main_news_item">
    <div class="main_news_liner">
      <h2 class="main_news_header"><?=$row['header']?></h3>
      <a class="main_news_img" href=""><img src="../img/<?=$row['img']?>" alt=""></a>
      <h3 class="main_news_announcement"><?=$row['announcement']?></h2>
      <div class="main_news_content"><?=$row['content']?></div>
      <div class="main_news_info"><?=$row['timestamp']?></div>
    </div>
    <div class="update">
        <a href="delete.php?id=<?=$row['id']?>">Delete</a>
        <a href="update.php?id=<?=$row['id']?>">Update</a>
    </div>
  
  </div>

 <?php
  }



?> 


  
</body>
</html>


