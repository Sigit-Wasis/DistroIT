<?php 
	include"../ui/controller/koneksi.php";

	$id 	= $_POST['id'];
	$nama	= $_POST['nama'];
	$user	= $_POST['username'];
	$pass	= $_POST['password'];
	$foto	= $_FILES['foto']['name'];
	$tmp	= $_FILES['foto']['tmp_name'];

	$fotobaru = date('dmYHis').$foto;

	$path = "foto/".$fotobaru;

	if (move_uploaded_file($tmp, $path)) {
		$query = "insert into admin set
			  id	 	= '$id',
			  nama 	 	= '$nama',
			  username  = '$user',
			  password	= '$pass',
			  foto 		= '$fotobaru'";
		$result = $mysqli->query($query);
		if ($result) {
			header("location: admin.php");
		}else{
			echo "Gagal menyimpan file ke database";
			echo "<br><a href='form_tambah_admin.php'>Kembali</a>";
		}
	}else{
		echo "Gagal upload gambar";
		echo "<br><a href='form_tambah_admin.php'>Kembali</a>";
	}	
?>