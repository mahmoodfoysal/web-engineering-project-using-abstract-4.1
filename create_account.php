<!DOCTYPE html>
<html>

<head>
	<?php 
	include("head.php");
	?>
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
		<img src="photos/Authentication/reg_img.png" class="reg_img">
		<h1>Registation Here</h1>
		<form method="POST">
			<input type="text" name="full_name" placeholder="Enter Full Name" required>
			<input type="text" name="address" placeholder="Enter Full Address" required>
			<input type="email" name="email" placeholder="Enter Email" required>
			<input type="number" name="pnumber" placeholder="Enter Number" required>
			<input type="password" name="password" placeholder="Enter password" required>
			<input type="submit" name="submit" value="Registation">
		</form>
		<?php

			if (isset($_POST['submit'])) {

			 	# code...
			 	if(!empty($_POST['full_name']) && !empty($_POST['address']) && !empty($_POST['email']) && !empty($_POST['pnumber']) && !empty($_POST['password'])){

			 		$name = $_POST['full_name'];
			 		$address = $_POST['address'];
			 		$email = $_POST['email'];
			 		$contact = $_POST['pnumber'];
			 		$password = $_POST['password'];


			 		$conn = new mysqli('localhost','root','')or die(mysql_error());
			 		$db_select = mysqli_select_db($conn,'vs_project') or die('Db error');
			 		$quary = mysqli_query($conn,'SELECT * FROM registation WHERE email = "$email"');
			 		#$numrows = mysqli_num_rows($quary);

			 		$sql = "INSERT INTO registration(name,address,email,contact,password) VALUES ('$name','$address','$email','$contact','$password')";
			 		$result = mysqli_query($conn,$sql);
			 		if ($result) {
			 				# code...
			 				header('Location:login.php ? loginsuccess');
			 		}
			 		else{
			 				echo "Failed";
			 		}

			 		/*if ($numrows!=0) {
			 			# code...
			 			$sql = 'INSERT INTO registation(name,address,email,contact,password) VALUES ("$fname","$address","$email","$phone","$pass")';
			 			$result = mysqli_query($conn,$sql);

			 			if ($result) {
			 				# code...
			 				header('Location:login.html ? loginsuccess');
			 			}
			 			else{
			 				echo "Failed";
			 			}
			 		}
			 		else{
			 			echo "Failed";
			 		}*/
			 	}
			 	else{
			 		echo "required all fields";
			 	}
			 } 
		 ?>




	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
	</script>
</body>

</html>