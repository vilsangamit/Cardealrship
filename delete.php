<?php

include "config.php";

if(!isset($_SESSION['admin'])){

header("Location:admin-login.php");

exit();

}

$id=$_GET['id'];

$cars=json_decode(file_get_contents("cars.json"),true);

unset($cars[$id]);

$cars=array_values($cars);

file_put_contents(

"cars.json",

json_encode($cars,JSON_PRETTY_PRINT)

);

header("Location:admin-dashboard.php");

?>