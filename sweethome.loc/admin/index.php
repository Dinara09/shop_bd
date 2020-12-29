<!-- <?php
	session_start();
	$login = "admin";
	$password = "admin";

	if($_SESSION["login"] === $login && $_SESSION["password"] === $password)
	{
		header('Location: includes/login.php');
	}

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Document</title>
</head>
<body>
	<main style="margin-top: 20px" class="main">
		<form action="includes/login.php" method="post" class="formLogin" class="row g-3 col-md-6" >
			<h2>Вход в админ панель</h2>
			<div class="col-md-12">
				<label for="var-title" class="form-label">Логин</label>
				<input type="text" name="login" class="form-control" id="var-title">
			</div>
			<div class="col-md-12">
				<label for="var-title" class="form-label">Пароль</label>
				<input type="password" name="password" class="form-control" id="var-title">
			</div>
			<div class="col-12">
				<h2></h2>
				<button type="submit" class="btn btn-primary">Войти</button>
			</div>
		</form>
	</main>
</body>
</html>