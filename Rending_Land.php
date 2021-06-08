<?php
session_start();
if(!isset($_SESSION['email'])) {
    header("Location: login.php");
} 
	include 'MVC/Controller/DbsConn.Controller.php';
	include 'MVC/Controller/RendLandDbs.Controller.php';
	include 'MVC/View/Rent.View.php';

	class Rending_Land extends ViewUser 
	{
		public function Rending_View()
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
			<h1 class="text-center"class="boxed">Rending of Land</h1>
		</div>
	</div>

<?php
	$users = new Rending_Land();
	echo $users->Rending_View();
?>
</body>
</html>