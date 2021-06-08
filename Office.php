<?php
session_start();
if(!isset($_SESSION['email'])) {
    header("Location: login.php");
} 
	include 'MVC/Controller/DbsConn.Controller.php';
	include 'MVC/Controller/OfficeDbs.Controller.php';
	include 'MVC/View/Rent.View.php';

	class Office extends ViewUser 
	{
		public function Office_View()
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
			<h1 class="text-center"class="boxed">Rent Office</h1>
		</div>
	</div>

<?php
	$users = new Office();
	echo $users->Office_View();
?>
</body>
</html>