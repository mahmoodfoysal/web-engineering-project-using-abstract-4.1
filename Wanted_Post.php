<?php
session_start();
if(!isset($_SESSION['email'])) {
    header("Location: login.php");
} 
	include 'MVC/Controller/DbsConn.Controller.php';
	include 'MVC/Controller/WantedPostDbs.Controller.php';
	include 'MVC/View/Rent.View.php';

	class Wanted_Post extends ViewUser 
	{
		public function Wanted_View()
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
			<h1 class="text-center"class="boxed">Wanteded Rental Post</h1>
		</div>
	</div>

<?php
	$users = new Wanted_Post();
	echo $users->Wanted_View();
?>
</body>
</html>