<?php
	session_start();
	$login = "admin";
	$password = "admin";

	if($_SESSION["login"] !== $login || $_SESSION["password"] !== $password)
	{
		header('Location: /admin');
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Document</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="navbar-fluid" href="#">
			<a class="navbar-brand" href="#"></a>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Взаимодействие с таблицами</a>
					</li>			
				</ul>
				<div class="exit">
					<a class="exit" href="logout.php">Выход</a>	
				</div>	
		
			</div>
		</div>
	</nav>
	
	<!-- <div class="mainTitle">Взаимодействие с таблицами
		<center><h2></h2></center>
		<button type="submit" class="btn btn-success">Вернуться</button>
	</div> -->
	
	<div class="allTables">
		<div class="chooseTable">
			<form action="../product.php" method="GET">
				<h5 class="product">Перейти к таблице "Продукты"</h5>
				<button type="submit" class="btn btn-primary">Перейти</button>
			</form>
		</div>
		<div class="chooseTable">
			<form action="../promotions.php" method="GET">
				<h5 class="promotion">Перейти к таблице "Акции" </h5>
				<button type="submit" class="btn btn-primary">Перейти</button>
			</form>
		</div>
		<div class="chooseTable">
			<form action="../shops.php" method="GET">
				<h5 class="shop">Перейти к таблице "Магазины"</h5>
			 	<button type="submit" class="btn btn-primary">Перейти</button>
			</form>
			
		</div>
	</div>
	
</body>