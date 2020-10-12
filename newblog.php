<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	
		<div class="mx-auto col-8 " style="display: flex" >
			<div class="col-2">
				<?php 
					$connect = mysqli_connect("127.0.0.1","root","","blog");
					$query = mysqli_query($connect,"SELECT * FROM users");

	 				for ($i=0; $i < 4 ; $i++) { 		
						$result = $query->fetch_assoc();							
						echo "<h3>".$result['name']."</h3>";
						echo "<p>".$result['Email']."</p>";
						echo "<p>".$result['phone']."</p>";
					}
				?>
			</div>
			
			<div class="col-10 ">
				<form action="nado.php" method="GET">
					<p>Заголовок :</p>
					<textarea name="title" class="col-12" style="height:"></textarea>
					<p>Содржимое :</p>
					<textarea name="text" class="col-12" style="height:250px"></textarea>
					<p>Aвтор :</p>
					<textarea name="avtor" class="col-12" style="height:"></textarea>
					<button class="btn">Cоздать пост</button>
				</form>			
			</div>
			
		</div>
	
</body>
</html>