<?php
	require 'function.php';

	if (isset($_POST['submit'])) {
		if (tambah($_POST) > 0) {
			echo "
				<script>
					alert('Pemesanan Berhasil Dilakukan');
					document.location.href = 'index.php';
				</script
			";
		}else{
			echo "
				<script>
					alert('Pemesanan Gagal Dilakukan');
					document.location.href = 'index.php';
				</script>
			";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pemesanan Kamar</title>
	<link rel="stylesheet" type="text/css" href="style.css?version=<?php echo filemtime('style.css') ?>">
</head>
<body>
	<div class="kotak_login">
	<h3>Form Pemesanan</h3>
	<form method="post" action="">
		<ul>
			<li><input type="text" name="nama_pemesan" required class="form_login" placeholder="Nama Pemesan">		
			</li>
			<li><input type="email" name="email" required class="form_login" placeholder="Email">		
			</li>
			<li><input type="text" name="no_handphone" required class="form_login" placeholder="No Handphone">		
			</li>
			<li>
				<select name="tipe_kamar" class="form_login">
					<option value="" disabled selected>Tipe Kamar:</option>
					<option value="Superior">Superior</option>
					<option value="Deluxe">Deluxe</option>
					<option value="Economy">Standart</option>
				</select>
			</li>
			<li>
				<input type="number" name="adult" placeholder="Adults" class="login" min="1" max="10">
			</li>
			<li>
				<input type="number" name="children" placeholder="Childrens" class="login" min="1" max="10">
			</li>
			<li>
				<button type="submit" name="submit" class="tombol_login">Pesan</button>
			</li>
		</ul>
	</form>
	</div>
</body>
</html>