<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<header>
		<div class="topmargin"></div>

		<div class="logo">
			<img src="photos/logo.jpeg" height="50" width="50">
		</div>

		<div class="Navigation">
			<ul>
				<li style="background: #1abc9c;"><a href="index.php">Home</a></li>
				<li><a href="#">For Rent</a>
					<ul>
						<li><a href="Family_House.php">Family House</a></li>
						<li><a href="Bachelor_Mess.php">Bachelor Mess</a></li>
						<li><a href="Sublet.php">Sublet</a></li>
						<li><a href="Garage.php">Garage</a></li>
						<li><a href="Factory.php">Factory</a></li>
						<li><a href="Office.php">Office</a></li>
					</ul>
				</li>
				<li><a href="submit.php">Submit Post</a></li>
				<li><a href="Advertising_Plot.php">Advertising of Plot</a></li> 
				<li><a href="Rending_land.php">Rending of Land</a></li>
				<li><a href="Wanted_Post.php">Wanted Post</a></li>
			</ul>
		</div>

        <div class="login" session_start();>
            <a class="boxed" href="logout.php">
                <?=$_SESSION['name'];?>
            </a>
        </div>
	</header> <br><br><br>
</body>
</html>