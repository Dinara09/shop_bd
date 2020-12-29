<?php

require_once 'connect.php';

$id = $_POST["id"];
$address= $_POST["address"];

$result = mysqli_query($connect, "UPDATE `shops` SET `address` = '$address' WHERE `shops`.`id` = $id");

header('Location: http://sweethome.loc/admin/shops.php?');