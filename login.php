<?php
include "config.php";

if(isset($_POST['login'])){

$email=$_POST['email'];
$password=$_POST['password'];

if($email==$userEmail && $password==$userPassword){

$_SESSION['user']=$email;

header("Location:index.php");
exit();

}
else{

$error="Invalid Email or Password.";

}

}
?>

<!DOCTYPE html>
<html>

<head>

<title>User Login</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="login-container">

<h2>User Login</h2>

<?php
if(isset($error)){
echo "<p style='color:red;'>$error</p>";
}
?>

<form method="POST">

<input
type="email"
name="email"
placeholder="Email"
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

<p style="text-align:center;margin-top:15px;">

<a href="admin-login.php">

Admin Login

</a>

</p>

<p style="text-align:center;">

<a href="index.php">

Back Home

</a>

</p>

</div>

</body>

</html>