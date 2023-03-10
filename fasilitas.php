<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hotel Hebat</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css?version=<?php echo filemtime('stylesheet.css'); ?>">
</head>
<body>
	<div class="header">
		<div class="header-logo"><h1>HOTEL HEBAT</h1></div>
		<div class="header-list">
			<ul>
				<li>
					<a href="index.php">Home</a> |
					<a href="kamar.php">Kamar</a> |
					<a href="fasilitas.php">Fasilitas</a>
				</li>
				<li>
					<a href="logout.php" class="login">Logout</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="main">
		<div class="contents-item">
			<img src="../project/img/gym.jpg" width="430px" height="300px">
			<p class="gym">Gym</p>
		</div>
		<div class="contents-item">
			<img src="../project/img/kolam.jpg" width="430px" height="300px">
			<p class="kolam">Swimming Pool</p>
		</div>
		<div class="contents-item">
			<img src="../project/img/laundry.jpg" width="430px" height="300px">
			<p class="laundry">Laundry</p>
		</div>
		<div class="contents-item">
			<img src="../project/img/taman.jpg" width="430px" height="300px">
			<p class="taman">Playing Ground</p>
		</div>
	</div>
</body>
</html>