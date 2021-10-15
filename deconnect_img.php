<?php 
// On récupère la session
session_start();

// Puis on la détruit la session donc le numéro unique de session 
session_destroy();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Bye</title>
</head>
<style type="text/css">
	.noobg{
		
		font-size: 30px;
		color: black;
		background-color: white; padding: 20px;border-radius: 5px;text-align: center;
		display:inline-block;

	}
	.img{
		width: 500px;margin-top:00px;margin-bottom:10px;margin-left:400px;margin-right:300px;
	}
</style>

<body>

	<img class='img' src='./Public/img/poisson.gif'><br>

	<meta http-equiv='refresh' content='2;URL=http://localhost:8080/projet%20php/ '>;

</body>
</html>
