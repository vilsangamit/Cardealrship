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
?>

<!DOCTYPE html>
<html>

<head>

<title>Admin Dashboard</title>

<link rel="stylesheet" href="style.css">

<style>

table{
width:100%;
border-collapse:collapse;
margin-top:30px;
}

th,td{
border:1px solid #ddd;
padding:12px;
text-align:center;
}

th{
background:#111;
color:#fff;
}

img{
width:120px;
height:80px;
object-fit:cover;
}

.form{
max-width:600px;
margin:40px auto;
}

.form input{
width:100%;
padding:12px;
margin:10px 0;
}

.form button{
padding:12px 20px;
background:#ff3c00;
color:white;
border:none;
cursor:pointer;
}

</style>

</head>

<body>

<h1 align="center">Admin Dashboard</h1>

<p align="center">

<a href="logout.php">Logout</a>

</p>

<div class="form">

<form action="save-car.php" method="POST">

<input
type="text"
name="name"
placeholder="Car Name"
required>

<input
type="text"
name="price"
placeholder="Price"
required>

<input
type="text"
name="image"
placeholder="Image Path (images/car1.jpg)"
required>

<button type="submit">

Add Car

</button>

</form>

</div>

<table>

<tr>

<th>Image</th>

<th>Name</th>

<th>Price</th>

<th>Edit</th>

<th>Delete</th>

</tr>

<?php

foreach($cars as $index=>$car){

?>

<tr>

<td>

<img src="<?php echo $car['image'];?>">

</td>

<td>

<?php echo $car['name'];?>

</td>

<td>

<?php echo $car['price'];?>

</td>

<td>

<a href="edit-car.php?id=<?php echo $index;?>">

Edit

</a>

</td>

<td>

<a href="delete-car.php?id=<?php echo $index;?>">

Delete

</a>

</td>

</tr>

<?php

}

?>

</table>

</body>

</html>