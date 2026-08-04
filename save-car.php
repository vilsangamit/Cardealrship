<?php

include "config.php";

if(!isset($_SESSION['admin'])){

header("Location:admin-login.php");
exit();

}

$cars=json_decode(file_get_contents("cars.json"),true);

if(!$cars){
$cars=[];
}

$newCar=[

"name"=>trim($_POST['name']),
"price"=>trim($_POST['price']),
"image"=>trim($_POST['image'])

];

$cars[]=$newCar;

file_put_contents(
"cars.json",
json_encode($cars,JSON_PRETTY_PRINT)
);

header("Location:admin-dashboard.php");

?>