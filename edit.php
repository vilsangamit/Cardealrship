<?php

include "config.php";

if(!isset($_SESSION['admin'])){

header("Location:admin-login.php");

exit();

}

$id=$_GET['id'];

$cars=json_decode(file_get_contents("cars.json"),true);

if(isset($_POST['update'])){

$cars[$id]=[

"name"=>$_POST['name'],

"price"=>$_POST['price'],

"image"=>$_POST['image']

];

file_put_contents(

"cars.json",

json_encode($cars,JSON_PRETTY_PRINT)

);

header("Location:admin-dashboard.php");

exit();

}

$car=$cars[$id];

?>

<!DOCTYPE html>

<html>

<head>

<title>Edit Car</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="form">

<h2>Edit Car</h2>

<form method="POST">

<input
type="text"
name="name"
value="<?php echo $car['name'];?>"
required>

<input
type="text"
name="price"
value="<?php echo $car['price'];?>"
required>

<input
type="text"
name="image"
value="<?php echo $car['image'];?>"
required>

<button
type="submit"
name="update">

Update Car

</button>

</form>

</div>

</body>

</html>