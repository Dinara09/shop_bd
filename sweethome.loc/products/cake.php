<?php
session_start();

if (isset($_SESSION['cart_list'])) {
	echo "Корзина: " . count($_SESSION['cart_list']) . " продукт";
}

require_once "../admin/includes/connect.php";


$query = "SELECT * FROM product";
$req = mysqli_query($connect, $query);
$data_from_db = [];

while ($result = mysqli_fetch_assoc($req)) {
	$data_from_db[] = $result;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SweetHome</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Sriracha&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="products.css">
</head>
<body>
	<header id="header" class="header">
		<div class="container">
			<div class="nav">
				<ul class="menu">
      				</li>
					<li>
						<a href="../index.php">Главная</a>
					</li>
					<li>
						<a href="http://sweethome.loc/products/cake.php">Торты</a>
					</li>
					<li>
						<a href="#">Десерты</a>	
					</li>
					<li>
						<a href="#">Хлеб</a>
					</li>
					<li>
						<a href="../cart/cart.php">Корзина</a>
					</li>	
				</ul>
			</div>
		</div>
		<div class="container">
			<center><h1>Торты</h1></center>
			<div class="productList">
				<div class="honeyCake">
					<img src="https://im0-tub-ru.yandex.net/i?id=666d95818bc52c9b7aaec8e96298baf5-l&n=13" width="260px" height="260px" alt="Event photo 1">
					<center><h3 class="nameProduct">Медовик</h3></center>
					<center><h5 class="discription">Сливочно-банановый крем, дробленные орехи</h5></center>
					<li>
						<a href="../cart/cart.php?name='Медовик'">Купить</a>
					</li>
				</div>
				<div class="birdMilkCake">
					<img src="https://avatars.mds.yandex.net/get-zen_doc/1873182/pub_5d57a8c4e4f39f00af4247e7_5d57aab444742600aedc0fbd/scale_1200" width="260px" height="260px" alt="Event photo 2">
					<center><h3 class="nameProduct">Птичье молоко</h3></center>
					<center><h5  class="discription">Воздушное суфле, шоколадный ганаш </h5></center>
					<li>
						<a href="../cart/cart.php?name='Торт Птичье молоко'">Купить</a>
					</li>
				</div>
				<div class="strawberryCheesecake">
					<img src="https://4.bp.blogspot.com/-RtHLBqNCovM/WluCHWNd0YI/AAAAAAAARvc/M-YsEprB2kAgIu1Vg55DHAZAVyNc07zMQCLcBGAs/s1600/blog%2B008ps.jpg" width="260px" height="260px" alt="Event photo 3">
					<center><h3 class="nameProduct">Чизкейк клубничный</h3></center>
					<center><h5  class="discription">Сливочное тесто, клубничная начинка, домашнее печенье</h5></center>
					<li>
						<a href="../cart/cart.php?name='Чизкейк клубничный'">Купить</a>
					</li>
				</div>
				<div class="limeCheesecake">
					<img src="https://i.pinimg.com/736x/4f/c9/1b/4fc91bb89fea69b82ed64cfddd354920.jpg" width="260px" height="260px" alt="Event photo 4">
					<center><h3 class="nameProduct">Чизкейк лаймовый</h3></center>
					<center><h5  class="discription">Сливочное тесто, лаймовая начинка, домашнее печенье</h5></center>
					<li>
						<a href="../cart/cart.php?name='Чизкейк лаймовый'">Купить</a>
					</li>
				</div>
			</div>
		</div>
	</header>
</body>
</html>