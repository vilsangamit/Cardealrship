<?php

include "config.php";

if(isset($_POST['login'])){

$email=$_POST['email'];

$password=$_POST['password'];

if($email==$adminEmail && $password==$adminPassword){

$_SESSION['admin']=$email;

header("Location:admin-dashboard.php");

exit();

}
else{

$error="Invalid Admin Login.";

}

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Admin Login</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="login-container">

<h2>Admin Login</h2>

<?php

if(isset($error)){

echo "<p style='color:red;'>$error</p>";

}

?>

<form method="POST">

<input
type="email"
name="email"
placeholder="Admin Email"
required>

<input
type="password"
name="password"
placeholder="Password"
required>

<button
type="submit"
name="login"
class="login-btn2">

Login

</button>

</form>

<p style="text-align:center;">

<a href="login.php">

User Login

</a>

</p>

</div>

</body>

</html>