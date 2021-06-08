<?php
session_start();
if(!isset($_SESSION['email'])) {
    header("Location: login.php");
} 
	include 'MVC/Controller/DbsConn.Controller.php';
	include 'MVC/Controller/IndexDbs.Controller.php';
	include 'MVC/View/Index.View.php';

	class Index extends ViewUser 
	{
		public function Index_View()
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

<?php
	$users = new Index();
	echo $users->Index_View();
?>
</body>
</html>