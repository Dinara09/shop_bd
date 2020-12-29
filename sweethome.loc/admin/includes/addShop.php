<?php

require_once 'connect.php';

$address = $_POST["address"];


$result = mysqli_query($connect, "INSERT INTO `shops` (`id`, `address`) VALUES (NULL, '$address')");

header('Location: http://sweethome.loc/admin/shops.php?');