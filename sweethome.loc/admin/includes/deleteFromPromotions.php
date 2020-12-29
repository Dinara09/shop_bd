<?php 

require_once 'connect.php';

$id = $_GET["id"];

mysqli_query($connect, "DELETE FROM `promotions` WHERE `promotions`.`id` = $id");

header('Location: http://sweethome.loc/admin/promotions.php?');