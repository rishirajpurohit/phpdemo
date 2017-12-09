<?php
session_start();

//this means loggedout
if(isset($_SESSION["userlogin"]) || empty($_SESSION)){
	if($_SESSION["userlogin"] == false){
		//echo "youa are alread logged in";
		header("Location: index.php");
	}
}


echo "Welcome, ".$_SESSION["name"];


include "mathfunctions.php";


if(isset($_POST['add'])){
	$first = $_POST['first'];
	$second = $_POST['second'];
  	
  	$math = new mathematica();
	$result = $math->calresult($first,$second,"add");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<form method='post'>
		<input type="number" name="first" placeholder="first number" />
		<input type="number" name="second" placeholder="Second number" />
		<input type="submit" name="add" value="add" />
	</form>
	<div id="res_box">
		<span>Result : </span>
		<span>
			<?php echo isset($result)?$result:"will be available on submit";?>
	</span>
	</div>

	<div>
			<span><a href="logout.php">Logout</a></span>

	</div>
</body>
</html>
