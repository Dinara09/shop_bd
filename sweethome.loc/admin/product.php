<?php

session_start();

require_once './includes/connect.php';

$products = mysqli_query($connect, "SELECT * FROM `product`");

// $sql = "INSERT INTO `product` (`id`, `name`, `dateAndTime`, `weight`, `isnew`, `cost`) VALUES (NULL, 'Торт', '2020-12-23 00:00:00', 100, 1, 200)";
// if (mysqli_query($connect, $sql)) {
//       echo "New record created successfully";
// } else {
//       echo "Error: " . $sql . "<br>" . mysqli_error($connect);
// }

// if($products)
// {
//     echo "Выполнение запроса прошло успешно";
// }
 
// // закрываем подключение
// mysqli_close($products);
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
			<a href="" class="navbar-brand">SweetHome</a>
			<button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarContent">
				<ui class="navbar-nav mr-auto mb-2">
					<li class="nav-item">
						<a href="" class="nav-link">Торты</a>
					</li>

					<li class="nav-item">
						<a href="" class="nav-link">Десерты</a>
					</li>

					<li class="nav-item">
						<a href="" class="nav-link">Хлеб</a>
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
		<table class="table table-bordered" width="100%" style="margin-top:60px" id="table">
			<thead width="100%" class="thead-dark">
			<tr>
				<th width="200" scope="col">id</th>
				<th scope="col">Название</th>
				<th scope="col">Дата изготовления</th>
				<th scope="col">Вес</th>
				<th scope="col">Новинка</th>
				<th scope="col">Стоимость</th>
				<th scope="col">Редактирование</th>
			</tr>
			</thead>
			<tbody>
				<?php
				while ($var = mysqli_fetch_assoc($products)) {
					echo '<tr>
					<th scope="row">' . $var["id"] . '</th>
					<td>' . $var["name"] . '</td>
					<td>' . $var["dateAndTime"] . '</td>
					<td>' . $var["weight"] . '</td>
					<td>' . $var["isnew"] . '</td>
					<td>' . $var["cost"] . '</td>
					<td align="right">
					<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
						<select name="forma" onchange="location = this.value">
						<option selected="true" disabled="disabled">Редактировать</option>
						 <option value = "includes/updateDate.php?id=' . $var["id"] . '">Изменить</option>
						 <option value = "includes/deleteDate.php?id=' . $var["id"] . '">Удалить</option>
						 </select>
					</div>
					</td>
				</tr>';
				}
				?>
			</tbody>
		</table>
		<h3 class="mt-4 mb-3">Добавить запись</h3>

		<form action="./includes/addDate.php" method="post" class="row g-3">
			<div class="col-md-12">
				<label for="name_product" class="form-label">Название</label>
				<input type="text" name="name" class="form-control" id="name_product">
			</div>

			<div class="col-md-12">
				<label for="date_product" class="form-label">Дата изготовления</label>
				<input type="<p><time datetime></time></p" name="date" class="form-control" id="date_product">
			</div>
			
			<div class="col-md-12">
				<label for="weight_product" class="form-label">Вес</label>
				<input type="number" name="weight" class="form-control" id="weight_product">
			</div>

			<div class="col-md-12">
				<label for="cost_product" class="form-label">Стоимость</label>
				<input type="number" name="cost" class="form-control" id="cost_product">
			</div>

			<div class="col-md-12">
				<label for="isnew_product" class="form-label">Новинка</label>
				<input type="number" name="isnew" class="form-control" id="isnew_product">
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
				<button class="btn btn-primary" type="submit">Добавить</button>
			</div>
		</form>
	</div>
</main>


<!-- <table id ="table" class="table table-bordered" style="margin-top:30px";>
	<thead>
		<tr>
			<th style="width: 5%">id</th>
			<th style="width: 20%">Название</th>
			<th style="width: 15%">Дата изготовления</th>
			<th style="width: 10%">Вес</th>
			<th style="width: 10%">Стоимость</th>
			<th style="width: 10%">Новинка</th>
			<th style="width: 10%">Редактирование</th>
		</tr>
	</thead>

</table> -->

<!-- <a href="#openModal">Открыть модальное окно</a>
<div id="openModal" class="modalDialog">
    <div>
        <a href="#close" title="Закрыть" class="close">X</a>
        <h2>Модальное окно</h2>
        <p>Пример простого модального окна, которое может быть создано с использованием CSS3.</p>
        <p>Его можно использовать в широком диапазоне, начиная от вывода сообщений и заканчивая формой регистрации.</p>
    </div>
</div> -->


<!-- JavaScript Bundle with Popper -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>	
</style>
</table> -->
<!-- <form action="includes/addDate" method="post">
	<p><input type="Button" value="Добавить" onclick="addRow()"></p>
</form>

<script>
	tbl = document.getElementById('table');
	
	function addRow()
    {
    	tbl.insertRow().innerHTML = 
    	`<td>
    	<input name="id_name" type="text" size="1" />
    	</td>
        <td>
    	<input name="name_name" type="text" size="30"/>
        </td>
        <td>
    	<input name="date_name" type="text" size="20" />
    	</td>
    	<td>
    	<input name="weight_name" type="text" size="5"/>
    	</td>
    	<td>
    	<input name="cost_name" type="text" size="5"/>
    	</td>
    	<td>
    	<input name="cost_name" type="text" size="5"/>
    	</td>
        <td><img src="https://img2.freepng.ru/20180613/lbz/kisspng-computer-icons-rubbish-bins-waste-paper-baskets-5b2181d1904a37.692212341528922577591.jpg" border = "0" width = "30" onclick="DeleteManufacturer(this);">
        <img src="https://img2.freepng.ru/20180425/hfq/kisspng-computer-icons-drawing-pencil-5ae0a20013c637.144976311524670976081.jpg" border = "0" width = "30" onclick="DeleteManufacturer(this);">
        <img src=" https://img2.freepng.ru/20180429/gww/kisspng-check-mark-checkbox-computer-icons-5ae573d39cb426.5082593715249868356419.jpg" border = "0" width = "30" onclick="addDate(this);">

        </td>`;
    }
    function addDate(img)
    {
        <form action="" method="post">

        </form>
    }
    function DeleteManufacturer(img)
    {
        img.closest("tr").remove();
    }
    function DeleteManufacturer(img)
    {
        img.closest("tr").remove();
    }
    
</script> -->
</body>
</html>
