<?php
require_once "../admin/includes/connect.php";

function get_product_by_id( $name ){
	global $connect;

	$query = "SELECT * FROM product WHERE name=" . $name;
	$req = mysqli_query($connect, $query);
	$resp = mysqli_fetch_assoc($req);

	return $resp;
}