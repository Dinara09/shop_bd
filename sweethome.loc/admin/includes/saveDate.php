<?php

require_once 'connect.php';

$id = $_POST["id"];
$name = $_POST["name"];
$date = $_POST["date"];
$weight= $_POST["weight"];
$cost= $_POST["cost"];
$isNew= $_POST["isnew"];

$result = mysqli_query($connect, "UPDATE `product` SET `name` = '$name', `dateAndTime` = '$date', `weight` = $weight, `isnew` = $isNew, `cost` = $cost WHERE `product`.`id` = $id");
// if ($result == true){
//     	echo "Изменено";
//     }else{
//     	echo "Не изменено";
//     }
header('Location: http://sweethome.loc/admin/');