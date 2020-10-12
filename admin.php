<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$connect = mysqli_connect("127.0.0.1","root","","blog");
		$query = mysqli_query($connect,"SELECT * FROM users");

	 	 for ($i=0; $i < 4 ; $i++) { 		
			$result = $query->fetch_assoc();							
			echo "<h1>".$result['name']."</h1>";
			echo "<p>".$result['Email']."</p>";
			echo "<p>".$result['phone']."</p>";
		}
	?>

</body>
</html>