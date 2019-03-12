<?php  
	include"../ui/controller/koneksi.php";

	$id 	= $_POST['id'];
	$nama	= $_POST['nama'];
	$harga	= $_POST['harga'];
	$stok	= $_POST['stok'];
	$satuan	= $_POST['satuan'];
	$kategori = $_POST['kategori'];
	$status	= $_POST['status'];
	$ket	= $_POST['keterangan'];
	

	if (isset($_POST['ubah_gambar'])) {
		$gambar = $_FILES['gambar']['name'];
		$tmp	= $_FILES['gambar']['tmp_name'];

		$gambarbaru = date('dmYHis'). $gambar;

		$path 	= "gambar/".$gambarbaru;
		if (move_uploaded_file($tmp, $path)) {
			$query	= "select * from barang where id = '".$id."'";
			$result	= $mysqli->query($query);
			$data 	= mysqli_fetch_array($result);
			if (is_file("gambar/".$data['gambar']))
			 	unlink("gambar/".$data['gambar']);
			 	$query = "update barang set nama_brg = '$nama', harga_brg = '$harga', stok_brg = '$stok', satuan_brg = '$satuan', kategori = '$kategori' gambar_brg = '$gambarbaru' where id_brg = '$id'";
			 	$result = $mysqli->query($query);
			 	if ($result) {
			 		header("location: home.php");
			 	}
			 	else{
			 		echo "Gagal update data";
			 		echo "<br><a href='form_edit.php'>Kembali</a>";
			 	}
			 }
			 else{
			 	echo "Gagal upload file";
			 	echo "<br><a href='form_edit.php'>Kembali</a>";
			 } 
		}
		else{
			$query = "update barang set nama_brg = '$nama', harga_brg = '$harga', stok_brg = '$stok', satuan_brg = '$satuan' kategori = '$kategori' where id_brg = '$id'";
			$result	= $mysqli->query($query);
			if ($result) {
				if ($kategori == "kaos") {
					header("location: home.php");
				}
				elseif ($kategori == "jacket") {
					header("location: home_jacket.php");
				}
				else{
					header("location: home_kemeja.php");
				}
			}
			else{
				echo "Gagal menyimpan data ke database";
				echo "<a href='form_edit.php'>Kembali</a>";
			}
		}
?>