<?php
include "connection.php";
$id = $_GET['id'];
$query = "SELECT id, title, announce, content, idate FROM news WHERE id='$id'" ;
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Document</title>
	<link href="style/styleview.css" rel="stylesheet" type="text/css">
	
</head>
<body>



	<div class="main_conteiner">
		<div class="conteiner">
			<h2 class="title"><?=$row['title']?></h2>
			
			<div class="content"><?=$row['content']?></div>

			<a href="news.php" class="back_link">Все новости >></a>
		</div>
	</div>

 
</body>
</html>
