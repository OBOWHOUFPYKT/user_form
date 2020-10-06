<?php 
include("User.php");
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$name =	strip_tags(trim($_POST['name']));
		$login = strip_tags(trim($_POST['login']));
		$password =	strip_tags(trim($_POST['password']));
		$email = strip_tags(trim($_POST['email']));

		
		// print_r($_POST);
		$objUser = new User($name, $login, $password, $email);
		var_dump($objUser);
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<form action="index.php" method="post">
		<label for="name">Имя: </label><input type="text" name="name"><br>
		<label for="login">Логин: </label><input type="text" name="login"><br>
		<label for="password">Пароль:</label><input type="password" name="password"><br>
		<label for="email">email:</label><input type="email" name="email"><br>
		<button type="submit">Отправить</button>
	</form>	
</body>
</html>