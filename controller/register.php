<?php
	if($_POST){
		$nama = $_POST['nama'];
		$notelp = $_POST['notelp'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$pass = $_POST['password'];

		if (empty($nama)) {
			echo "<script>location.href='../../signup.php';</script>";
		}elseif (empty($notelp)) {
			echo "<script>location.href='../../signup.php';</script>";
		}elseif (empty($email)) {
			echo "<script>location.href='../../signup.php';</script>";
		}else{
			include "connection.php";
			$insert = mysqli_query($conn,"iNSERT INTO t_pengguna (nama_pengguna, no_telp, email, username, password)
				value ('".$nama."','".$notelp."','".$email."','".$username."','".$pass."')") or die (mysqli_error($conn));

			if ($insert) {
				echo "<script>location.href='../signin.php';</script>";
			}else{
				echo "<script>location.href='../signin.php';</script>";
			}
		}
	}
?>