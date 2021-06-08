<?php
session_start();
if(!isset($_SESSION['email'])) {
    header("Location: login.php");
} 
	include 'MVC/Controller/DbsConn.Controller.php';
	include 'MVC/Controller/AdvertisePlotDbs.Controller.php';
	include 'MVC/View/Rent.View.php';

	class Advertising_Plot extends ViewUser 
	{
		public function Advertising_View()
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
			<h1 class="text-center"class="boxed">Advertising of Plot</h1>
		</div>
	</div>

<?php
	$users = new Advertising_Plot();
	echo $users->Advertising_View();
?>
</body>
</html>