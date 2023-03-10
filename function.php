<?php 
	$conn = mysqli_connect("localhost","root","","hotel");

	function query($query){
		global $conn;
		$result = mysqli_query($conn,$query);
		$rows = [];
		while($row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		};
		return $rows;
	}
	function tambah($post){
		global $conn;

		$nama_pemesan = htmlspecialchars($post["nama_pemesan"]);
		$email = htmlspecialchars($post["email"]);
		$no_handphone = htmlspecialchars($post["no_handphone"]);
		$tipe_kamar = htmlspecialchars($post["tipe_kamar"]);
		$adult = htmlspecialchars($post["adult"]);
		$children = htmlspecialchars($post["children"]);

		$query = "INSERT INTO hotel VALUES ('','$nama_pemesan','$email','$no_handphone','$tipe_kamar','$adult','$children')";
		mysqli_query($conn,$query);
		return mysqli_affected_rows($conn);
	}
	function tambah1($post){
		global $conn;

		$tanggal_check_in = htmlspecialchars($post["tanggal_check_in"]);
		$tanggal_check_out = htmlspecialchars($post["tanggal_check_out"]);
		$jumlah_kamar = htmlspecialchars($post["jumlah_kamar"]);

		$query = "INSERT INTO pesan VALUES ('','$tanggal_check_in','$tanggal_check_out','$jumlah_kamar')";
		mysqli_query($conn,$query);
		return mysqli_affected_rows($conn);
	}
	function register($post){
		global $conn;

		$username = strtolower(stripcslashes($post['username']));
		$password = mysqli_escape_string($conn,$post['password']);
		$password2 = mysqli_escape_string($conn,$post['password2']);

		$result = mysqli_query($conn,"SELECT username FROM register WHERE username = '$username'");

		if (mysqli_fetch_assoc($result)) {
			echo "
				<script>
					alert('Username Sudah Terdaftar');
				</script>";
			return false;
		}

		if($password !== $password2){
			echo "
				<script>
					alert('Password Tidak Sesuai');
				</script>
				";

			return false;
		}
		$password = password_hash($password, PASSWORD_DEFAULT);
		mysqli_query($conn,"INSERT INTO register VALUES('','$username','$password')");
		return mysqli_affected_rows($conn);
	}
?>