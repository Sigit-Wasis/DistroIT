<?php  
	$host	= "localhost";
	$user	= "root";
	$pw		= "";
	$db		= "onstore";
	$mysqli	= new mysqli($host, $user, $pw, $db);

	if (mysqli_connect_errno()) {
		echo "Error: database gagal terhubung, silahkan coba lagi!";
		exit;
	}
?>