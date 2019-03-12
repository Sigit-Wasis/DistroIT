<?php
session_start(); // Memulai Session
if (isset($_POST['submit'])) {
		// Membangun koneksi ke database
		include"../ui/controller/koneksi.php";		
		// Variabel username dan password
		$username = $_POST['username'];
		$password = $_POST['password'];
		// Mencegah MySQL injection 
		$username = stripslashes($username);
		$password = stripslashes($password);

		// Seleksi Database
		// SQL query untuk memeriksa apakah karyawan terdapat di database?
		$query = "select * from admin where password = '$password' AND username = '$username'";
		$result = $mysqli->query($query);
		$num 	= $result->num_rows;
			if ($num == 1) {
				$_SESSION['login_user']=$username; // Membuat Sesi/session
				header("location: home.php"); // Mengarahkan ke halaman profil
				} else {
				$error = "Username atau Password belum terdaftar";
				}
				$mysqli->close(); // Menutup koneksi
	}
?>