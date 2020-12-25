<?php 

require_once 'connect.php';

$id=$_GET["id"];

$var =mysqli_fetch_assoc( mysqli_query($connect, "SELECT * FROM `product` WHERE `id` = $id"));

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
			<!-- <button class="navbar-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="">
				<span class="navbar-toggle-icon"></span>
			</button> -->
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
			<form class="row g-3" action="saveDate.php" method="post">
				<input type="hidden" value="<?php
				echo $var["id"];
				?>" name="id">
				<div class="col-md-12">
				<label for="name_product" class="form-label">Название</label>
				<input type="text" name="name" class="form-control" value="<?php
				echo $var["name"];
				  ?>" id="name_product">
			</div>

			<div class="col-md-12">
				<label for="date_product" class="form-label">Дата изготовления</label>
				<input type="<p><time datetime></time></p" name="date" class="form-control"  value="<?php
				echo $var["dateAndTime"];
				  ?>" id="date_product">
			</div>
			
			<div class="col-md-12">
				<label for="weight_product" class="form-label">Вес</label>
				<input type="number" name="weight" class="form-control" value="<?php
				echo $var["weight"];
				  ?>" id="weight_product">
			</div>

			<div class="col-md-12">
				<label for="cost_product" class="form-label">Стоимость</label>
				<input type="number" name="cost" class="form-control" value="<?php
				echo $var["cost"];
				  ?>" id="cost_product">
			</div>

			<div class="col-md-12">
				<label for="isnew_product" class="form-label">Новинка</label>
				<input type="number" name="isnew" class="form-control" value="<?php
				echo $var["isnew"];
				  ?>" id="isnew_product">
			</div>
			<div class="col-12">
				<button class="btn btn-primary" type="submit" class="btn btn-primaty">Сохранить</button>
			</div>
			</form>
		</div>
	</main>
</body>
</html>