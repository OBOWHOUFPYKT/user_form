<?php 
include("User.php");
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$name =	strip_tags(trim($_POST['name']));
		$login = strip_tags(trim($_POST['login']));
		$password =	strip_tags(trim($_POST['password']));
		$email = strip_tags(trim($_POST['email']));

		
		// print_r($_POST);
		$objUser = new User($name, $login, $password, $email);
		

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
	<pre>
	<?php 
		print_r(file("user.txt"));
		echo count(file("user.txt"));
		$tmp = file("user.txt");
		echo $tmp[0];
		$tmp2 = explode("|", $tmp[0]);
		print_r($tmp2);
		var_dump( array_search("itasasu_kanon", $tmp2));
	 ?>
	</pre>
</body>
</html>
