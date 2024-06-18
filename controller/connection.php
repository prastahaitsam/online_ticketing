<?php
	$conn = mysqli_connect('localhost','root','','db_uts_promnet');

	if(mysqli_connect_error()){
		printf("Connect failed", mysqli_connect_error());
		exit();
	}
?>