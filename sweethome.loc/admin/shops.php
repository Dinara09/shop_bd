<?php

session_start();

require_once './includes/connect.php';

$shops = mysqli_query($connect, "SELECT * FROM `shops`");
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1251">
	<title> table </title>
	
</head>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<title>Document</title>
</head>


<body style="height: 5000px">
	<nav class="fixed-top navbar navbar-expand-sm navbar-dark bg-dark">
		<div class="container">
			<a href="includes/mainAdminMenu.php" class="navbar-brand">SweetHome</a>
			<button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarContent">
				<ui class="navbar-nav mr-auto mb-2">
					<li class="nav-item">
						<a href="product.php" class="nav-link">Продукты</a>
					</li>

					<li class="nav-item">
						<a href="promotions.php" class="nav-link">Акции</a>
					</li>

					<li class="nav-item">
						<a href="shops.php" class="nav-link">Магазины</a>
					</li>

				</ui>
				<form action="" class="d-flex">
					<input type="search" placeholder="search" class="form-control mr-2">
					<button class="btn outline-success">Search</button>
				</form>
			</div>
		</div>
	</nav>

<main style="">
	<div class="container">
		<table class="table table-bordered" style="margin-top:60px; width: auto;" id="table">
			<thead class="thead-dark">
			<tr>
				<th scope="col">id</th>
				<th scope="col">Адресс</th>
				<th scope="col">Редактирование</th>
			</tr>
			</thead>
			<tbody>
				<?php
				while ($var = mysqli_fetch_assoc($shops)) {
					echo '<tr>
					<th scope="row">' . $var["id"] . '</th>
					<td>' . $var["address"] . '</td>
					<td align="right">
					<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
						<select name="forma" onchange="location = this.value">
						<option selected="true" disabled="disabled">Редактировать</option>
						 <option value = "includes/updateShop.php?id=' . $var["id"] . '">Изменить</option>
						 <option value = "includes/deleteShop.php?id=' . $var["id"] . '">Удалить</option>
						 </select>
					</div>
					</td>
				</tr>';
				}
				?>
			</tbody>
		</table>
		<h3 class="mt-4 mb-3">Добавить запись</h3>

		<form action="./includes/addShop.php" method="post" class="row g-3">
			<div class="col-md-12">
				<label for="address_shop" class="form-label">Адрес</label>
				<input type="text" name="address" class="form-control" id="address_shop">
			</div>
			<div class="col-12">
				<button class="btn btn-primary" type="submit">Добавить</button>
			</div>
		</form>
	</div>
</main>
</body>
</html>
