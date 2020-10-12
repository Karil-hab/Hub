<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		<?php
		$connect = mysqli_connect("127.0.0.1","root","","blog");

		if($connect== true){
			echo "Соединение есть";
		}else{
			echo "Соединения нет";
		}

		$query = mysqli_query($connect,"SELECT * FROM post");
		
		echo $result["autor"];

		$dataBase=[
			['title'=>"Статья_1",'short_text'=>"Текст",'img'=>"img/1.jpg",'users'=>"Users1" ],
			['title'=>"Статья_2",'short_text'=>"Текст2",'img'=>"img/2.jpg",'users'=>"Users2"],
			['title'=>"Статья_3",'short_text'=>"Текст3",'img'=>"img/3.jpg",'users'=>"Users3"],
			['title'=>"Статья_4",'short_text'=>"Текст4",'img'=>"img/4.jpg",'users'=>"Users4"],
			['title'=>"Статья_5",'short_text'=>"Текст5",'img'=>"img/5.jpg",'users'=>"Users5"],
		];

		$_GET['from'];
		 ?>
	</div>
	<button><a href="admin.php">Админ</a></button>
	<div style="margin-left: auto;width: 200px"><a href="newblog.php" >Добавить блог</a></div>

	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<?php 
			echo "<h1>"." Приветствую ,".$_GET['from'].'!!!!!!'."</h1>";
		?>

		<h1 class="text-center">БЛОГ</h1>
		<hr>
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			 <?php 
				echo "<h1>".$_GET['title']."</h1>" ;
				echo "<p>".$_GET['text'] ."</p>" ;
				echo "<h3>".$_GET['avtor']."</h3>" ;			 	
				for ($i=0; $i < 4 ; $i++) { 		
					$result = $query->fetch_assoc();							
					echo "<h1 style='background:green'>".$result['title']."</h1>";
					echo "<p>".$result['text']."</p>";
					echo "<img src='". $result['img']."' class='w-100'>";
					echo "<p>"."Автор : ".$result['autor']."</p>";
					echo "<a href='statiy.php?id=".$i."' target='_blank'>".'Более подробно'."</a>" ;
				}

				 
			?>
		</div>
	</div>
</body>
</html>