<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah Barang</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<?php
	include"../ui/controller/koneksi.php";

	$query	= "select max(id) as maxId from admin";
	$hasil	= $mysqli->query($query);
	$data 	= mysqli_fetch_array($hasil);
	$idAdmin = $data['maxId'];

	$noUrut	= (int) substr($idAdmin, 3, 3);

	$noUrut++;

	$char	= 'ADM';
	$newID	= $char . sprintf("%03s", $noUrut);
	?>
	<form class="form-horizontal col-md-5" action="add_admin.php" method="post" enctype="multipart/form-data">
	  <div class="form-group">
	  	<div class="col-sm-7"></div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">ID :</label>
	    <div class="col-sm-7">
	      <input type="text" class="form-control" name="id" value="<?php echo $newID; ?>" readonly="">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">Nama :</label>
	    <div class="col-sm-7">
	      <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">Username :</label>
	    <div class="col-sm-7">
	    	<input type="text" class="form-control" placeholder="Masukkan Username" name="username">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">Password :</label>
	    <div class="col-sm-7">
	    	<input type="text" class="form-control" placeholder="Masukkan Password" name="password">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">Foto :</label>
	    <div class="col-sm-7"> 
	      <input type="file" class="form-control" name="foto">
	    </div>
	  </div>
	  <div class="form-group"> 
	    <div class="col-md-offset-4 col-sm-10">
	      <button type="reset" class="btn btn-warning">Reset</button>
	      <button type="submit" class="btn btn-success" name="submit">Submit</button>
	    </div>
	  </div>
	</form>
</body>
</html>