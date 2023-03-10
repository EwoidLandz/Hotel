<?php 
	require 'function.php';

	if (isset($_POST['submit'])) {
		if (register($_POST) > 0) {
			echo "
				<script>
					alert('Akun Berhasil Dibuat');
					document.location.href = 'login.php';
				</script>
			";
		}else{
			mysqli_error($conn);
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Registrasi</title>
	<link rel="stylesheet" type="text/css" href="style.css?version=<?php echo filemtime('style.css'); ?>">
</head>
<body>
	<div class="kotak_login">
	<h3>Form Registrasi</h3>
	<form method="post" action="">
		<ul>
			<li>
				<input type="text" name="username" required class="form_login" placeholder="Username" id="username">
			</li>
			<li>
				<input type="password" name="password" required class="form_login" placeholder="Password" id="password" pattern="[0-9]{6}">		
			</li>
			<li>
				<input type="password" name="password2" required class="form_login" placeholder="Konfirmasi Password" id="password2">		
			</li>
			<li>
				<button type="submit" name="submit" class="tombol_login">Daftar</button>
			</li>
		</ul>
	</form>
	</div>
</body>
</html>