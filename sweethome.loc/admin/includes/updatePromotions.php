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
			<form class="row g-3" action="saveToPromotions.php" method="post">
				<div class="col-md-12">
					<input type="hidden" value="<?php
				echo $var["id"];
				?>" name="id">
				<div class="col-md-12">
				<label for="promocode" class="form-label">Промокод</label>
				<input type="text" value="<?php
				echo $var["promocode"];
				?>"name="promocode" class="form-control" id="promocode">
			</div>

			<div class="col-md-12">
				<label for="dateStart" class="form-label">Начало</label>
				<input type="date" value="<?php
				echo $var["dateStart"];
				?>"name="dateStart" class="form-control" id="dateStart">
			</div>
			
			<div class="col-md-12">
				<label for="dateEnd" class="form-label">Конец</label>
				<input type="date" 
				value="<?php
				echo $var["dateEnd"];
				?>"name="dateEnd" class="form-control" id="dateEnd">
			</div>

			<div class="col-md-12">
				<label for="name" class="form-label">Название</label>
				<input type="text" value="<?php
				echo $var["name"];
				?>"name="name" class="form-control" id="name">
			</div>

			<div class="col-md-12">
				<label for="amountDiscount" class="form-label">Скидка</label>
				<input type="number" value="<?php
				echo $var["amountDiscount"];
				?>"name="amountDiscount" class="form-control" id="amountDiscount">
			</div>

			<!-- <div class="col-md-6">
				<label for="data-type" class="form-label">Тип значения</label>
				<select id="data-type" class="form-select">
					<option value="1" selected>Текст</option>
					<option value="2">Изображение</option>
				</select>
			</div>

			<div class="col-md-12" id="image-form">
				<label for="text" class="form-label">Изображение</label>
				<input type="file" class="text-control" id="image">
			</div> -->

			<div class="col-12">
				<button class="btn btn-primary" type="submit">Сохранить</button>
			</div>
			</form>
		</div>
	</main>
</body>
</html>