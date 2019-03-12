<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah Barang</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<?php
	include"../ui/controller/koneksi.php";

	$query	= "select max(id_brg) as maxId from barang";
	$hasil	= $mysqli->query($query);
	$data 	= mysqli_fetch_array($hasil);
	$idBarang	= $data['maxId'];

	$noUrut	= (int) substr($idBarang, 3, 3);

	$noUrut++;

	$char	= 'BRG';
	$newID	= $char . sprintf("%03s", $noUrut);
	?>
	<form class="form-horizontal col-md-5" action="add_barang.php" method="post" enctype="multipart/form-data">
	  <div class="form-group">
	  	<div class="col-sm-7"></div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">ID :</label>
	    <div class="col-sm-7">
	      <input type="text" class="form-control" name="id" readonly="" value="<?php echo $newID;?>">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">Nama :</label>
	    <div class="col-sm-7">
	      <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">Harga :</label>
	    <div class="col-sm-7">
	    	<input type="text" class="form-control" placeholder="Masukkan Harga" name="harga">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">Stok :</label>
	    <div class="col-sm-3">
	    	<select name="stok" class="form-control">
	    		<script type="text/javascript">
	    			for(i=1;i<10001;i++){
	    				document.write("<option>"+i+"</option>");
	    			}
	    		</script>
	    	</select>
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">Satuan :</label>
	    <div class="col-sm-3">
	    	<select name="satuan" class="form-control">
				<option value="box">Box</option>
				<option value="pcs">Pcs</option>
				<option value="pack">Pack</option>	    		
	    	</select>
	    </div>
	  </div>
	      <input type="hidden" class="form-control" placeholder="Masukkan Keterangan" value="1" name="status">
	  <div class="form-group">
	    <label class="control-label col-sm-3">Keterangan :</label>
	    <div class="col-sm-7">
	      <textarea class="form-control" placeholder="Masukkan Status" name="keterangan"></textarea>
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">Kategori :</label>
	    <div class="col-sm-3">
	    	<select name="kategori" class="form-control">
				<option value="kaos">Kaos</option>
				<option value="jacket">Jacket</option>
				<option value="kemeja">Kemeja</option>	    		
	    	</select>
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">Gambar :</label>
	    <div class="col-sm-7"> 
	      <input type="file" class="form-control" name="gambar">
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