<?php 
	include ("koneksi.php");
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>edit jadwal pemberangkatan</title>
 	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
 </head>
 <body>
 	<form method="post" class="form-horizontal">
 		<?php 

			$idkereta = $_GET['idkereta'];
 			$select = "SELECT * FROM `jadwalpemberangkatan` WHERE idkereta=$idkereta";
			$result = mysqli_query($koneksi, $select);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			if (mysqli_num_rows($result) == " "){
				echo '<font color="red">Data tidak ditemukan.</font>';
			} else {
 		 ?>
 		 <h3><center>Form Edit Data Pemberangkatan</center></h3>
 		 <div class="control-group">
		    <label class="control-label" for="inputidkereta">Id Kereta</label>
		    <div class="controls">
		      <input type="text" name="idkereta" id="inputidkereta" disabled value="<?php echo $row['idkereta']; ?>">
		    </div>
		    </div>
		  <div class="control-group">
		    <label class="control-label" for="inputnomerpemberangkatan">No. Pemberangkatan</label>
		    <div class="controls">
		      <input type="text" name="nomerpemberangkatan" id="inputnopemberangkatan" value="<?php echo $row['nomerpemberangkatan']; ?>">
		    </div>
		    </div>
		  	<div class="control-group">
		    <label class="control-label" for="inputkeberangkatan">Keberangkatan</label>
		    <div class="controls">
		    <input type="text" name="keberangkatan" id="inputkeberangkatan" value="<?php echo $row['keberangkatan']; ?>">
		    </div>
		    </div>
		  	<div class="control-group">
		    <label class="control-label" for="inputtujuan">Tujuan</label>
		    <div class="controls">
		      <input type="text" name="tujuan" id="inputtujuan" value="<?php echo $row['tujuan']; ?>">
		    </div>
		    </div>
		    <div class="control-group">
		    <label class="control-label" for="inputwaktu">waktu</label>
		    <div class="controls">
		      <input type="text" name="waktu" id="inputwaktu" value="<?php echo $row['waktu']; ?>">
		    </div>
		    </div>
		    <div class="control-group">
		    <label class="control-label" for="inputharga">Harga</label>
		    <div class="controls">
		      <input type="number" name="harga" id="inputharga" value="<?php echo $row['harga']; ?>">
		    </div>
		    </div>
		    <div class="control-group">
    	<div class="controls">
  			<button type="submit" name="submit" class="btn">Submit</button>
    	</div>
    </div>
 	</form>
 	<?php 
 		}
			if (isset($_POST['submit'])) {
					$nomerpemberangkatan = $_POST['nomerpemberangkatan'];
					$keberangkatan = $_POST['keberangkatan'];
					$tujuan = $_POST['tujuan'];
					$waktu = $_POST['waktu'];
					$harga = $_POST['harga'];			
					$update = "UPDATE jadwalpemberangkatan SET nomerpemberangkatan='$nomerpemberangkatan', 
					keberangkatan='$keberangkatan', tujuan='$tujuan', waktu='$waktu', harga='$harga' WHERE idkereta='$idkereta'";
					if (mysqli_query($koneksi, $update)) {
						echo "Data berhasil diupdate";
						echo "<br/><br/><a href='jadwalpemberangkatan.php'>Kembali ke Data Pemberangkatan</a>";					
					} else {
					echo "Error: ". $update ."<br/>". mysqli_error($koneksi);
				}	
				
			mysqli_close($koneksi);
		}
 	 ?>
 </body>
 </html>