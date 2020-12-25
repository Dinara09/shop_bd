<?php

require_once 'connect.php';

$name = $_POST["name"];
$date = $_POST["date"];
$weight= $_POST["weight"];
$cost= $_POST["cost"];
$isNew= $_POST["isnew"];

$result = mysqli_query($connect, "INSERT INTO `product` (`id`, `name`, `dateAndTime`, `weight`, `isnew`, `cost`) VALUES (NULL, '$name', '$date', $weight, $isNew, $cost)");
    
    // if ($result == true){
    // 	echo "Информация занесена в базу данных";
    // }else{
    // 	echo "Информация не занесена в базу данных";
    // }

header('Location: http://sweethome.loc/admin/');