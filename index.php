<?php
include 'auth.php';

session_start();

//this means logged in
if(isset($_SESSION["userlogin"])){
	if($_SESSION["userlogin"] == true){
	//echo "youa are alread logged in";
	header("Location: dashboard.php");
	}
}

//login logic
if(isset($_POST['login'])){
	$username = $_POST["username"];
	$passwrd = $_POST["pass"];

	$user_obj = new User();
	if($user_obj->is_valid($username,$passwrd)){
		$_SESSION["userlogin"] = true;
		$_SESSION["name"] = $username;
	}else{
		//error msg
		$_SESSION["userlogin"] = false;
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="POST">
		<input type="text" name="username">
		<input type="text" name="pass">
		<input type="submit" name="login">
	</form>
</body>
</html>