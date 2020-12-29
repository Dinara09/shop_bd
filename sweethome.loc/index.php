<?php

session_start();

require_once 'admin/includes/connect.php';
require_once "db_informations/information.php";


	$popularProduct = get_popular();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SweetHome</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Sriracha&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<header id="header" class="header">
		<div class="container">
			<div class="nav">
				<ul class="menu">
					<li>
						<a href="" class="submenu-link">Интресное</a>
						<a href="#" id="main">
      						<!-- <div id="zatemnenie">
      							<div id="okno">
      								<center><h4 class="popular">Популярное</h4></center>
      								<?php
				while ($var = mysqli_fetch_assoc($popularProduct)) {
					echo '$var';
				}
				?>
        							<a href="#" class="close">Закрыть окно</a>
      							</div>
    						</div> -->
        				<ul class="submenu">
        					<li><a href="popular.php">Популярное</a></li>
          					<li><a href="productsNew.php">Новинки</a></li>
          					<li><a href="promotionsInfo.php">Акции</a></li>
        				</ul>
      				</li>
					<li>
						<a href="index.php">Главная</a>
					</li>
					<li>
						<a href="products/cake.php">Торты</a>
					</li>
					<li>
						<a href="#">Десерты</a>	
					</li>
					<li>
						<a href="#">Хлеб</a>
					</li>
					<li>
						<a href="cart/cart.php">Корзина</a>
					</li>	
				</ul>
			</div>
			<div class="name">
				<h1>SWEET HOME</h1>
				<p>кафе-кондитерская</p>
			</div>
		</div>
	</header>
</body>
</html>