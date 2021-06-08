<?php
session_start();
if(!isset($_SESSION['email'])) {
    header("Location: login.php");
} 
	include 'MVC/Controller/DbsConn.Controller.php';
	include 'MVC/Controller/FactoryDbs.Controller.php';
	include 'MVC/View/Rent.View.php';

	class Factory extends ViewUser 
	{
		public function Factory_View()
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
			<h1 class="text-center"class="boxed">Rent Factory</h1>
		</div>
	</div>

<?php
	$users = new Factory();
	echo $users->Factory_View();
?>
</body>
</html>