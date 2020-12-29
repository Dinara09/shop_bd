<?php

require_once 'connect.php';

$promocode = $_POST["promocode"];
$dateStart = $_POST["dateStart"];
$dateEnd= $_POST["dateEnd"];
$name= $_POST["name"];
$amountDiscount= $_POST["amountDiscount"];

$result = mysqli_query($connect, "INSERT INTO `promotions` (`id`, `promocode`, `dateStart`, `dateEnd`, `name`, `amountDiscount`) VALUES (NULL, '$promocode', '$dateStart', '$dateEnd', '$name', $amountDiscount)");
    
    // if ($result == true){
    // 	echo "Информация занесена в базу данных";
    // }else{
    // 	echo "Информация не занесена в базу данных";
    // }

header('Location: http://sweethome.loc/admin/promotions.php?');