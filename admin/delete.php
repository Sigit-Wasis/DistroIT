<?php

include "../ui/controller/koneksi.php";

$id = $_GET['id'];
	
$query = "SELECT * FROM barang WHERE id_brg='".$id."'";
$sql = $mysqli->query($query); 
$data = mysqli_fetch_array($sql); 

if(is_file("gambar/".$data['gambar_brg'])) 
  unlink("gambar/".$data['gambar_brg']); 

$query2 = "DELETE FROM barang WHERE id_brg='".$id."'";
$sql2 = mysqli_query($mysqli, $query2);
if($sql2){	

  header("location: home.php");
}else{

  echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>