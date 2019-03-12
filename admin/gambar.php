<?php
	$tmp = $_FILES['gambar']['tmp_name'];
	  $nama_file = $_FILES['gambar']['name'];
	  if (move_uploaded_file($tmp,"gambar/{$nama_file}")){
	      echo "<script>alert('sukses');</script>"; 
	      $gambar = "http://localhost/pwl/project/admin/gambar/{$nama_file}";
	  }
	  else {
	    echo "<pre>";
	    print_r($_FILES['gambar']);
	    echo "</pre>";
	    die("File gagal di upload"); 
	  }
?>