<?php
require_once "admin/includes/connect.php";

function get_popular(){
	global $connect;

	$query = "SELECT `product`.`name` FROM `product` inner join `orderstoproducts` on `orderstoproducts`.`productsid` = `product`.`id` group by `product`.`name` order by sum(`orderstoproducts`.`count`) desc limit 3;";
	$req = mysqli_query($connect, $query);
	$resp = mysqli_fetch_assoc($req);
	return $resp;
}