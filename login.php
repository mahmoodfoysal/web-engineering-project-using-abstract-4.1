<!DOCTYPE html>
<html>

<head>
	<?php 
	include("head.php");
	?>
	<link rel="stylesheet" type="text/css" href="css/Login.css">
	<link rel="stylesheet" type="text/css" href="css/create_account.css">
</head>

<style>
body {
  background-image: url('photos/Authentication/log.jpg');
}
</style>

<body>
	<?php 
	include("header.php");
	?>

	<div class="box">
		<img src="photos/Authentication/user.png" class="user">
		<h1>Login Here</h1>
		<form method="POST">
			<input type="text" name="useremail" placeholder="Enter Username">
			<input type="password" name="userpass" placeholder="Enter password">
			<input type="submit" name="submit" value="Login">

			<a href="create_account.php">Create Acccount</a>
		</form>


<?php

if (isset($_POST['submit'])) {

	echo "Failed";
	//get value passes from login.php file
	$email = $_POST['useremail'];
	$password = $_POST['userpass'];

	//to prevent mysql injection
	$email = stripcslashes($email);
	$password = stripcslashes($password);
	$demo=mysqli_connect("localhost","root","","vs_project");
	// Query the database for user
	$result = mysqli_query($demo,"select * from registration where email = '$email' and password = '$password'") 
						or die("Failed to Query database".mysql_error());
	$numrows=mysqli_num_rows($result);
	            if($numrows!= 0){
	            	while ($row=mysqli_fetch_assoc($result)) {
	            		
	            		$email=$row['email'];
	            		$name = $row['name'];
	            		$password=$row['password'];
	            	}
	            	if($email==$email&&$password==$password){
	            		session_start();
	            		$_SESSION['name'] = $name;
	            		$_SESSION['email']=$email;
	            		
	            		header("Location: index.php");
	            	}
	            	else{
	            		echo "Invalid Email or Password";
	            	}
	            }
	    	}



	?>



	</div>
</body>

</html>