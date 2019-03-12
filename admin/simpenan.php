<?php 
	include"../ui/controller/koneksi.php";

	$id 	= $_POST['id'];
	$nama	= $_POST['nama'];
	$harga	= $_POST['harga'];
	$stok	= $_POST['stok'];
	$satuan	= $_POST['satuan'];
	$status	= $_POST['status'];
	$ket	= $_POST['keterangan'];
	$gambar;

	include_once('gambar.php');
	
	$query = "insert into barang set
			  id_brg 	 = '$id',
			  nama_brg 	 = '$nama',
			  harga_brg  = '$harga',
			  stok_brg	 = '$stok',
			  satuan_brg = '$satuan',
			  gambar_brg = '$gambar',
			  keterangan = '$ket',
			  status 	 = '$status'";
		if ($mysqli->query($query)) {
			header("location: index.php");
		}
		else{
			echo "gagal menginput data";
		}
		$mysqli->close();
?>