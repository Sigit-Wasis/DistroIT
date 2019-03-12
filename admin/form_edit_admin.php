<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah Barang</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<?php  
		include "../ui/controller/koneksi.php";

		$query	= "select * from admin where id = '$_GET[id]'";
		$result	= $mysqli->query($query);
		$row = $result->fetch_assoc();
		extract($row);
	?>
	<form class="form-horizontal col-md-5" action="edit_admin.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
	  <div class="form-group">
	  	<div class="col-sm-7"></div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">ID :</label>
	    <div class="col-sm-7">
	      <input type="text" class="form-control" name="id" value="<?php echo $id ?>" readonly="">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">Nama :</label>
	    <div class="col-sm-7">
	      <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" value="<?php echo $nama?>">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">Username :</label>
	    <div class="col-sm-7">
	    	<input type="text" class="form-control" value="<?php echo $username;?>" placeholder="Masukkan Username" name="username">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">Password :</label>
	    <div class="col-sm-7">
	    	<input type="text" class="form-control" value="<?php echo $password?>" placeholder="Masukkan Password" name="password">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">Foto :</label>
	    <div class="col-sm-7"> 
	      <input type="checkbox" name="ubah_foto" value="true">Centang jika ingin mengubah foto
	      <input type="file" class="form-control" name="foto">
	    </div>
	  </div>
	  <div class="form-group"> 
	    <div class="col-md-offset-4 col-sm-10">
	      <button type="reset" class="btn btn-warning">Reset</button>
	      <button type="submit" class="btn btn-success">Submit</button>
	    </div>
	  </div>
	</form>
</body>
</html>