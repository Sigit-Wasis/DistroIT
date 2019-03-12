<?php
	$tmp = $_FILES['foto']['tmp_name'];
	  $nama_file = $_FILES['foto']['name'];
	  if (move_uploaded_file($tmp,"foto/{$nama_file}")){
	      echo "<script>alert('sukses');</script>"; 
	      $foto = "http://localhost/pwl/project/admin/foto/{$nama_file}";
	  }
	  else {
	    echo "<pre>";
	    print_r($_FILES['foto']);
	    echo "</pre>";
	    die("File gagal di upload"); 
	  }
?>