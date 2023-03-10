<?php
	require 'function.php';
	$pinjam = mysqli_query($conn,"SELECT * FROM hotel");
	$pesan = mysqli_query($conn,"SELECT * FROM pesan");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="admin.css?version=<?php echo filemtime('admin.css'); ?>">
</head>
<body>
	<div class="header">
		<form method="submit" action="">
			<ul>
				<li class="date">
					<input type="date" name="tanggal">
				</li>
				<li class="search">
					<input type="text" name="search">
					<button type="submit" name="submit">Search</button>
				</li>
			</ul>
		</form>
	</div>
	<div class="table">
	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th>id</th>
			<th>Nama Tamu</th>
			<th>Tanggal Check-In</th>
			<th>Tanggal Check-Out</th>
			<th>Aksi</th>
		</tr>
		<?php $id=1; ?>
		<?php foreach ($pinjam as $rows1) :?>
		<?php foreach ($pesan as $rows2) : ?>
		<tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $rows1["nama_pemesan"]; ?></td>
			<td><?php echo $rows2["tanggal_check_in"]; ?></td>
			<td><?php echo $rows2["tanggal_check_out"]; ?></td>
			<td>Check In</td>
		</tr>
		<?php $id++; ?>
	<?php endforeach; ?>
<?php endforeach;?>
	</table>
	</div>
</body>
</html>