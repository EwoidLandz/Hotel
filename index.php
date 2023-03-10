<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

	require 'function.php';
	$hotel = mysqli_query($conn,"SELECT * FROM hotel");

	if (isset($_POST['submit'])) {
		if (tambah1($_POST) > 0) {
			echo "
				<script>
					document.location.href = 'tambah.php';
				</script>
			";
		}else{
			echo "
				<script>
					document.location.href = 'tambah.php';
				</script>
			";
		}
	}
 ?>

<!DOCTYPE html>
<html lang="en">
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
		<div class="gambar"><img src="../project/img/hotel.jpg" width="100%" height="500px"></div>
		<div class="form">
			<form action="" method="post">
				<ul>
					<li>
						<label for="tanggal_check_in">Tanggal Check In</label>
						<input type="date" name="tanggal_check_in" id="tanggal_check_in" required>
					</li>
					<li>
						<label for="tanggal_check_out">Tanggal Check Out</label>
						<input type="date" name="tanggal_check_out" id="tanggal_check_out" required>
					</li>
					<li>
						<label for="jumlah_kamar">Jumlah Kamar</label>
						<input type="text" name="jumlah_kamar" id="jumlah_kamar" required>
					</li>
					<li>
						<button type="submit" name="submit" class="submit">Pesan</button>
					</li>
				</ul>
			</form>
		</div>
	</div>
	<div class="footer">
		<div class="footer-text">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15956.143969887924!2d104.0100917!3d1.1346517!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9897e7e16d1af%3A0x671d6c5a376fae89!2sASTON%20INN%20Gideon%20-%20Batam!5e0!3m2!1sid!2sid!4v1678337705211!5m2!1sid!2sid" width="300" height="145" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>
</body>
</html>