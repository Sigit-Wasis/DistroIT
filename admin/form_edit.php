<!DOCTYPE html>
<html>
<head>
	<title>Form Update Barang</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<?php  
		include "../ui/controller/koneksi.php";

		$query	= "select * from barang where id_brg = '$_GET[id]'";
		$result	= $mysqli->query($query);
		$row = $result->fetch_assoc();
		extract($row);
	?>
	<form class="form-horizontal col-md-5" action="edit.php?id=<?php echo $id_brg;?>" method="post" enctype="multipart/form-data">
	  <div class="form-group">
	  	<div class="col-sm-7"></div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">ID :</label>
	    <div class="col-sm-7">
	      <input type="text" class="form-control" name="id" readonly="" value="<?php echo $id_brg?>">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">Nama :</label>
	    <div class="col-sm-7">
	      <input type="text" class="form-control" name="nama" value="<?php echo $nama_brg?>">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">Harga :</label>
	    <div class="col-sm-7">
	    	<input type="text" class="form-control"  Harga" name="harga" value="<?php echo $harga_brg?>">
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">Stok :</label>
	    <div class="col-sm-3">
	    	<select name="stok" class="form-control">
	    		<script type="text/javascript">
	    			for(i=1;i<10001;i++){
	    				document.write("<option value='<?php echo $stok_brg;?>'>"+i+"</option>");
	    			}
	    		</script>
	    	</select>
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">Satuan :</label>
	    <div class="col-sm-3">
	    	<?php  
	    		if ($satuan_brg == "box") {
	    			echo "<select name='satuan' class='form-control'>
							  <option value='box'>Box</option>
							  <option value='pcs'>Pcs</option>
							  <option value='pack'>Pack</option>	    		
	    				  </select>";
	    		}
	    		elseif ($satuan_brg == "pcs") {
	    			echo "<select name='satuan' class='form-control'>
							  <option value='pcs'>Pcs</option>
							  <option value='pack'>Pack</option>	    		
							  <option value='box'>Box</option>
	    				  </select>";
	    		}
	    		else{
	    			echo "<select name='satuan' class='form-control'>
							  <option value='pack'>Pack</option>	    		
							  <option value='pcs'>Pcs</option>
							  <option value='box'>Box</option>
	    				  </select>";	
	    		}
	    	?>
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">Kategori :</label>
	    <div class="col-sm-3">
	    	<?php
	    		if ($kategori == 'kaos') {
	    			echo "<select name='kategori' class='form-control'>
							  <option value='kaos'>Kaos</option>
							  <option value='jacket'>Jacket</option>
							  <option value='kemeja'>Kemeja</option>	    		
	    				  </select>";
	    		}
	    		elseif ($kategori == 'jacket') {
	    			echo "<select name='kategori' class='form-control'>
							  <option value='jacket'>Jacket</option>
							  <option value='kemeja'>Kemeja</option>	    		
							  <option value='kaos'>Kaos</option>
	    				  </select>";
	    		}
	    		else{
	    			echo "<select name='kategori' class='form-control'>
							  <option value='kemeja'>Kemeja</option>	    		
							  <option value='kaos'>Kaos</option>
							  <option value='jacket'>Jacket</option>
	    				  </select>";
	    		}
	    	?>
	    	
	    </div>
	  </div>
	      <input type="hidden" class="form-control" value="1" name="status">
	  <div class="form-group">
	    <label class="control-label col-sm-3">Keterangan :</label>
	    <div class="col-sm-7">
	      <textarea class="form-control" name="keterangan"><?php echo $keterangan?></textarea>
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="control-label col-sm-3">Gambar :</label>
	    <div class="col-sm-7"> 
	      <input type="checkbox" name="ubah_gambar" value="true">Centang jika ingin mengubah gambar
	      <input type="file" class="form-control" name="gambar">
	    </div>
	  </div>
	  <div class="form-group"> 
	    <div class="col-md-offset-4 col-sm-10">
	      <a href="home.php" class="btn btn-warning">Batal</a>
	      <button type="submit" class="btn btn-success">Ubah</button>
	    </div>
	  </div>
	</form>
</body>
</html>