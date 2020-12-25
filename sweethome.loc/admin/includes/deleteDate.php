<?php 

require_once 'connect.php';

$id = $_GET["id"];

mysqli_query($connect, "DELETE FROM `product` WHERE `product`.`id` = $id");

header('Location: http://sweethome.loc/admin/');