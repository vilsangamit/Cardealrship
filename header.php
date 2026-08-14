<?php include "config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title><?php echo $siteName; ?></title>

<link rel="stylesheet" href="style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<header>

<nav class="navbar">

<div class="logo">

<h2>Car<span>Deal</span></h2>

</div>

<ul class="nav-links">

<li><a href="index.php">Home</a></li>

<li><a href="cars.php">Browse Cars</a></li>

<li><a href="reviews.php">Reviews</a></li>

<li><a href="contact.php">Contact</a></li>

<li><a href="login.php" class="login-btn">Login</a></li>
<?php

if(isset($_SESSION['admin'])){

echo '<li><a href="admin-dashboard.php" class="login-btn">Dashboard</a></li>';
echo '<li><a href="logout.php">Logout</a></li>';

}

elseif(isset($_SESSION['user'])){

echo '<li><a href="logout.php" class="login-btn">Logout</a></li>';

}

else{

echo '<li><a href="login.php" class="login-btn">Login</a></li>';

}

?>
</ul>

<div class="menu-btn">

<i class="fa-solid fa-bars"></i>

</div>

</nav>

</header>