<?php 

require_once 'connect.php';

$id = $_GET["id"];

mysqli_query($connect, "DELETE FROM `shops` WHERE `shops`.`id` = $id");

header('Location: http://sweethome.loc/admin/shops.php?');