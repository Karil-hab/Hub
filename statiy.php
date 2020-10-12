<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title></title>
</head>
<body>
	<?php
		$dataBase=[
			['title'=>"Статья_1",'short_text'=>"Текст",'img'=>"img/1.jpg",'users'=>"Users1" ,'lorem'=>"Текст 555643 ыыыыыыыыыыыыыыыкуццкуцкыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыы"],
			['title'=>"Статья_2",'short_text'=>"Текст2",'img'=>"img/2.jpg",'users'=>"Users2",'lorem'=>"Текст  4ыыыыыыыыыыыыыыыыыыыыыыыыыыыыыщщщщщщщщщщщщ"],
			['title'=>"Статья_3",'short_text'=>"Текст3",'img'=>"img/3.jpg",'users'=>"Users3",'lorem'=>"Текст  34ыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыорлпрпвавыыыыыыы"],
			['title'=>"Статья_4",'short_text'=>"Текст4",'img'=>"img/4.jpg",'users'=>"Users4",'lorem'=>"Текст  2ыыыыыыыыыыыыыыыыыыыыыыыыыыываыфваыываыыыыыыыыыыыыыыыыыыыыы"],
			['title'=>"Статья_5",'short_text'=>"Текст5",'img'=>"img/5.jpg",'users'=>"Users5",'lorem'=>"Текст  1ываываываыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыыы"],
		];

		$dataBase[$i=$_GET["id"]];	

		 ?>

	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h1 class="text-center">БЛОГ</h1>
		<hr>
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			 <?php 
				echo "<h1 style='background:green'>".$dataBase[$i]['title']."</h1>";
				echo "<p>".$dataBase[$i]['short_text']."</p>";
				echo "<img src='". $dataBase[$i]['img']."' class='w-100'>";
				echo "<p>"."Автор : ".$dataBase[$i]['users']."</p>";
				echo "<p>"."Текст : ".$dataBase[$i]['lorem']."</p>";				 
			?>
		</div>
	</div>
</body>
</html>