<?php

session_start();

require_once "db_informations/information.php";

$shops = mysqli_query($connect, "SELECT DISTINCT `name` FROM `product` WHERE `isnew` = 1;");
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
		</div>
	</nav>

<main style="">
	<div class="container">
		<table class="table table-bordered" style="margin-top:60px; width: auto;" id="table">
			<thead class="thead-dark">
			<tr>
				<th scope="col">Название</th>
			</tr>
			</thead>
			<tbody>
				<?php
				while ($var = mysqli_fetch_assoc($shops)) {
					echo '<tr>
					<td>' . $var["name"] . '</td>
				</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
</main>
</body>
</html>