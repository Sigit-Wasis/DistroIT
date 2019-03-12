<?php

include "../ui/controller/koneksi.php";

$id = $_GET['id'];
	
$query = "SELECT * FROM admin WHERE id='".$id."'";
$sql = $mysqli->query($query); 
$data = mysqli_fetch_array($sql); 

if(is_file("foto/".$data['foto'])) 
  unlink("foto/".$data['foto']); 

$query2 = "DELETE FROM admin WHERE id='".$id."'";
$sql2 = mysqli_query($mysqli, $query2);
if($sql2){	

  header("location: admin.php");
}else{

  echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>