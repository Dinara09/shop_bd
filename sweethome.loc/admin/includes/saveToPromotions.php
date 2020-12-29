<?php

require_once 'connect.php';

$id = $_POST["id"];
$dateStart = $_POST["dateStart"];
$dateEnd = $_POST["dateEnd"];
$promocode= $_POST["promocode"];
$name= $_POST["name"];
$amountDiscount= $_POST["amountDiscount"];

$result = mysqli_query($connect, "UPDATE `promotions` SET `promocode` = '$promocode', `dateStart` = '$dateStart', `dateEnd` = '$dateEnd', `name` = '$name', `amountDiscount` = $amountDiscount WHERE `promotions`.`id` = $id");
// if ($result == true){
//     	echo "Изменено";
//     }else{
//     	echo "Не изменено";
//     }
header('Location: http://sweethome.loc/admin/promotions.php?');