<?php  
	include"../ui/controller/koneksi.php";

	$id 	= $_POST['id'];
	$nama	= $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	

	if (isset($_POST['ubah_foto'])) {
		$foto = $_FILES['foto']['name'];
		$tmp	= $_FILES['foto']['tmp_name'];

		$fotobaru = date('dmYHis'). $gambar;

		$path 	= "foto/".$fotobaru;
		if (move_uploaded_file($tmp, $path)) {
			$query	= "select * from admin where id = '".$id."'";
			$result	= $mysqli->query($query);
			$data 	= mysqli_fetch_array($result);
			if (is_file("foto/".$data['foto']))
			 	unlink("foto/".$data['foto']);
			 	$query = "update admin set nama = '$nama', username = '$username', password = '$password', foto = '$fotobaru' where id = '$id'";
			 	$result = $mysqli->query($query);
			 	if ($result) {
			 		header("location: admin.php");
			 	}
			 	else{
			 		echo "Gagal update data";
			 		echo "<br><a href='form_edit_admin.php'>Kembali</a>";
			 	}
			 }
			 else{
			 	echo "Gagal upload file";
			 	echo "<br><a href='form_edit_admin.php'>Kembali</a>";
			 } 
		}
		else{
			$query = "update admin set nama = '$nama', username = '$username', password = '$password' where id = '$id'";
			$result	= $mysqli->query($query);
			if ($result) {
				header("location: admin.php");
			}
			else{
				echo "Gagal menyimpan data ke database";
				echo "<a href='form_edit_admin.php'>Kembali</a>";
			}
		}
?>