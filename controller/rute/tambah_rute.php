<?php
	if($_POST){
		$rute = $_POST['nama-rute'];
		$harga = $_POST['harga'];

		if (empty($rute)) {
			echo "<script>location.href='../../index.php?page=data_rute';alert('Rute tidak boleh kosong !')</script>";
		}elseif (empty($harga)) {
			echo "<script>location.href='../../index.php?page=data_rute';alert('Harga tidak boleh kosong !')</script>";
		}else{
			include "../connection.php";
			$insert = mysqli_query($conn,"iNSERT INTO t_rute (nama_rute, harga)
				value ('".$rute."','".$harga."')") or die (mysqli_error($conn));

			if ($insert) {
				echo "<script>location.href='../../index.php?page=data_rute';alert('Data berhasil ditambahkan !')</script>";
			}else{
				echo "<script>location.href='../../index.php?page=data_rute';alert('Data gagal ditambahkan !')</script>";
			}
		}
	}
?>