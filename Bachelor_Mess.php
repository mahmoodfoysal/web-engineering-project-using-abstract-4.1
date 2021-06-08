<?php
session_start();
if(!isset($_SESSION['email'])) {
    header("Location: login.php");
} 
	include 'MVC/Controller/DbsConn.Controller.php';
	include 'MVC/Controller/BachelorDbs.Controller.php';
	include 'MVC/View/Rent.View.php';

	class Bechelor_Mess extends ViewUser 
	{
		public function Bechelor_View()
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
			<h1 class="text-center"class="boxed">Rent Bechelor Mess</h1>
		</div>
	</div>

<?php
	$users = new Bechelor_Mess();
	echo $users->Bechelor_View();
?>
</body>
</html>