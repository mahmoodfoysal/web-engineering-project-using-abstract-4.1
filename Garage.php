<?php
session_start();
if(!isset($_SESSION['email'])) {
    header("Location: login.php");
} 
	include 'MVC/Controller/DbsConn.Controller.php';
	include 'MVC/Controller/GarageDbs.Controller.php';
	include 'MVC/View/Rent.View.php';

	class Garage extends ViewUser 
	{
		public function Garage_View()
		{
			return parent::showAllUser();
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<div class="adverting_text" >
			<h1 class="text-center"class="boxed">Rent Garage</h1>
		</div>
	</div>

<?php
	$users = new Garage();
	echo $users->Garage_View();
?>
</body>
</html>