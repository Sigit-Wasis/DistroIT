<?php 
	include"../ui/controller/koneksi.php";

	$id 	= $_POST['id'];
	$nama	= $_POST['nama'];
	$harga	= $_POST['harga'];
	$stok	= $_POST['stok'];
	$satuan	= $_POST['satuan'];
	$status	= $_POST['status'];
	$kategori = $_POST['kategori'];
	$ket	= $_POST['keterangan'];
	$gambar = $_FILES['gambar']['name'];
	$tmp	= $_FILES['gambar']['tmp_name'];

	$gambarbaru = date('dmYHis').$gambar;

	$path = "gambar/".$gambarbaru;

	if (move_uploaded_file($tmp, $path)) {
		$query = "insert into barang set
			  id_brg 	 = '$id',
			  nama_brg 	 = '$nama',
			  harga_brg  = '$harga',
			  stok_brg	 = '$stok',
			  satuan_brg = '$satuan',
			  gambar_brg = '$gambarbaru',
			  kategori	 = '$kategori',
			  keterangan = '$ket',
			  status 	 = '$status'";
		$result = $mysqli->query($query);
		if ($result) {
			header("location: home.php");
		}else{
			echo "Gagal menyimpan file ke database";
			echo "<br><a href='form_tambah.php'>Kembali</a>";
		}
	}else{
		echo "Gagal upload gambar";
		echo "<br><a href='form_tambah.php'>Kembali</a>";
	}	
?>