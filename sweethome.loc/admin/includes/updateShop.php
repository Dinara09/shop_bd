<?php 

require_once 'connect.php';

$id=$_GET["id"];

$var =mysqli_fetch_assoc( mysqli_query($connect, "SELECT * FROM `promotions` WHERE `id` = $id"));

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand"  href="#">SweetHome</a>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">База</a>
					</li>
				</ul>
				<!-- <a href="#" style="...">Вернуться на сайт</a> -->
			</div>
		</div>
	</nav>

	<main style="...">
		<div class="container"> 
			<h3 class="mt-4 mb-3">Обновление</h3>
			<form class="row g-3" action="saveToShop.php" method="post">
				<div class="col-md-12">
					<input type="hidden" value="<?php
				echo $var["id"];
				?>" name="id">
				<div class="col-md-12">
				<label for="address" class="form-label">Адрес</label>
				<input type="text" value="<?php
				echo $var["address"];
				?>"name="address" class="form-control" id="address">
			</div>

			<div class="col-12">
				<button class="btn btn-primary" type="submit">Сохранить</button>
			</div>
			</form>
		</div>
	</main>
</body>
</html>