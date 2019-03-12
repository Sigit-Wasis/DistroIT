<?php
// Membangun Koneksi dengan Server dengan nama server, user_id dan password sebagai parameter
	include"../ui/controller/koneksi.php";
// Seleksi Database
session_start();// Memulai Session
// Menyimpan Session
$user_check=$_SESSION['login_user'];
// Ambil nama karyawan berdasarkan username karyawan dengan mysql_fetch_assoc
$ses_sql=mysqli_query("select nama from admin where username='$user_check'", $mysqli);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['nama'];
if(!isset($login_session)){
	mysqli_close($mysqli); // Menutup koneksi
	header('Location: login.php'); // Mengarahkan ke Home Page
}
?>