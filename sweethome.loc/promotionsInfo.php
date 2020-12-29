<?php

session_start();

require_once 'admin/includes/connect.php';

$promotions = mysqli_query($connect, "SELECT * FROM `promotions` WHERE current_date()<=`dateEnd`;");
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
			<a href="index.php" class="navbar-brand">Вернуться</a>
			<button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false">
				<span class="navbar-toggler-icon"></span>
			</button>
	</nav>

<main style="">
	<div class="container">
		<table class="table table-bordered" width="100%" style="margin-top:60px" id="table">
			<thead width="100%" class="thead-dark">
			<tr>
				<th scope="col">id</th>
				<th scope="col">Промокод</th>
				<th scope="col">Начало</th>
				<th scope="col">Конец</th>
				<th scope="col">Название</th>
				<th scope="col">Скидка</th>
			</tr>
			</thead>
			<tbody>
				<?php
				while ($var = mysqli_fetch_assoc($promotions)) {
					echo '<tr>
					<th scope="row">' . $var["id"] . '</th>
					<td>' . $var["promocode"] . '</td>
					<td>' . $var["dateStart"] . '</td>
					<td>' . $var["dateEnd"] . '</td>
					<td>' . $var["name"] . '</td>
					<td>' . $var["amountDiscount"] . '</td>
	
				</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
</main>
</body>
</html>
