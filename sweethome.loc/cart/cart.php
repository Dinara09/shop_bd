<?php
session_start();

$sum=0;

require_once "../admin/includes/connect.php";
require_once "functions.php";



if ( isset($_GET['delete_id']) && isset($_SESSION['cart_list']) ) {
	foreach ($_SESSION['cart_list'] as $key => $value) {
		if ( $value['id'] == $_GET['delete_id'] ) {
			unset($_SESSION['cart_list'][$key]);
		}		
	}
}


if ( isset($_GET['name']) && !empty($_GET['name']) ) {

	$current_added = get_product_by_id($_GET['name']);

	if ( !empty($current_added) ) {

		if ( !isset($_SESSION['cart_list'])) {
			$_SESSION['cart_list'][] = $current_added;
		}

		$check = false;

		if ( isset($_SESSION['cart_list']) ) {
			foreach ($_SESSION['cart_list'] as $value) {
				if ( $value['name'] == $current_added['name'] ) {
					$check = true;
				}
			}
		}

		if ( !$check ) {
			$_SESSION['cart_list'][] = $current_added;
		}

	} else {
		header("Location: 404.php");
	}
	
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="cartStyle.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Sriracha&display=swap" rel="stylesheet">
	<title>Cart</title>
</head>
<body>
<header class="header">
	<div class="block">
		<div class="returnLink">
			<a href="../../index.php">На главную</a> |
			<a href="../products/cake.php">Продолжить покупки</a>
		</div>

		<div class="mainTitle">
			<center><h1>Корзина</h1></center>
		</div>
	</div>
	

	<?php if ( isset($_SESSION['cart_list']) && count($_SESSION['cart_list']) !=0 ) : ?>
	
		<ul class="cartList">
			
			<?php foreach( $_SESSION['cart_list'] as $product ) : ?>

				<li class="product">
					<?php echo $product['name']; ?> | 
					<?php echo $product['cost']; ?> руб. |
					<a href="cart.php?delete_id=<?php echo $product['id'];?>">Х</a>
					<?php global $sum; $sum = $sum + $product['cost'] ?>
				</li>
				
			<?php endforeach; ?>
			<p>Итого: <?php echo $sum; ?></p>
			
		</ul>
	
	<?php else : ?>

		<p class="emptyCart">
			Ваша корзина пуста
		</p>

	<?php endif; ?>	
	<br>
</header>
	
</body>
</html>