<?
include "connection.php";

$num =5 ;
$page = $_GET['page'];
$result = mysqli_query($link, "SELECT COUNT(*) FROM news ");
$posts = mysqli_fetch_row($result); 
$posts = $posts[0];

$total = intval(($posts - 1) / $num) + 1;
$page = intval($page);
$i=1;
$start = $page * $num;


$query = "SELECT id, title, announce, content, idate FROM news ORDER BY idate  DESC LIMIT $start, $num";
$result = mysqli_query($link, $query);

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<title>Document</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>


	<h1>Привет мир1!</h1>
<div class="main_conteiner">
	<div class="container">
		
		<h1>
			Новости
		</h1>

		<div class="content">
		<?
			while ($row = mysqli_fetch_array($result) ) 
	 			{  		
	 				
	 	?>
	 	<div class="time"><?echo date('d.m.Y', $row[4])?></div>	
	
	 	<a href="view.php?id=<?=$row['id']?>" class="title"><?=$row['title']?></a>
	 	<p class="announce"><?=$row['announce']?></p>
	 	<br/>
	 	<?php
  				}
		?>
		</div>

		<div class="nav">
			<h3>
				Cтраницы:
			</h3>

		</div>
		<?
		while ($i < $total) {
				?>
					<a  class="link" href="news.php?page=<?echo($i)?>"><?echo($i)?></a>

				<?
				$i++;	
		}

		?>
	</div>
</div>
</body>
</html>





