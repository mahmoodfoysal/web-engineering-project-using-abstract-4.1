<?php
session_start();
if(!isset($_SESSION['email'])) {
    header("Location: login.php");
} 
	include 'MVC/Controller/DbsConn.Controller.php';
	include 'MVC/Controller/FamilyDbs.Controller.php';
	include 'MVC/View/Rent.View.php';

	class Family_House extends ViewUser 
	{
		public function Family_View()
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
			<h1 class="text-center"class="boxed">Rent Family House</h1>
		</div>
	</div>

<?php
	$users = new Family_House();
	echo $users->Family_View();
?>
</body>
</html>