<?php
session_start();
if(!isset($_SESSION['email'])) {
    header("Location: login.php");
} 
	include 'MVC/Controller/DbsConn.Controller.php';
	include 'MVC/Controller/SubletDbs.Controller.php';
	include 'MVC/View/Rent.View.php';

	class Sublet extends ViewUser 
	{
		public function Sublet_View()
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
			<h1 class="text-center"class="boxed">Sublet Rent</h1>
		</div>
	</div>

<?php
	$users = new Sublet();
	echo $users->Sublet_View();
?>
</body>
</html>