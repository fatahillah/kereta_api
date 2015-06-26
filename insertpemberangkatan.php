<?php 
	include("koneksi.php");
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tambah Keberangkatan</title>
 	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
 </head>
 <body>
 	<form method="post" class="form-horizontal">
 		<div class="control-group">
    <label class="control-label" for="inputidkereta">Id Kereta</label>
    <div class="controls">
      <input type="text" name="idkereta" id="inputidkereta" placeholder="Id Kereta">
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="inputnomerpemberangkatan">No. Pemberangkatan</label>
    <div class="controls">
      <input type="text" name="nomerpembrangkatan" id="inputnomerpemberangkatan" placeholder="No. Pemberangkatan">
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="inputkeberangkatan">Keberangkatan</label>
    <div class="controls">
      <input type="text" name="keberangkatan" id="inputkeberangkatan" placeholder="Keberangkatan">
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="inputtujuan">Tujuan</label>
    <div class="controls">
      <input type="text" name="tujuan" id="inputtujuan" placeholder="Tujuan">
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="inputwaktu">Waktu</label>
    <div class="controls">
      <input type="text" name="waktu" id="inputwaktu" placeholder="Waktu">
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="inputharga">Harga</label>
    <div class="controls">
      <input type="text" name="harga" id="inputharga" placeholder="Harga">
    </div>
    </div>
 	 <div class="control-group">
    	<div class="controls">
  			<button type="submit" class="btn" name="submit">Save Change</button>
    	</div>
    </div>
    </form>

    <?php 
    	if (isset($_POST['submit'])) {
			$idkereta = $_POST['idkereta'];
			$nomerpembrangkatan = $_POST['nomerpembrangkatan'];	
			$keberangkatan = $_POST['keberangkatan'];
			$tujuan = $_POST['tujuan'];
			$waktu = $_POST['waktu'];
			$harga = $_POST['harga'];

		$insert = "INSERT INTO jadwalpemberangkatan VALUES ('$idkereta','$nomerpembrangkatan','$keberangkatan','$tujuan','$waktu','$harga')";
			if (mysqli_query($koneksi, $insert)) {
				echo "Data baru berhasil dibuat";
			} else {
				echo "Error: ". $insert ."<br/>".mysqli_error($koneksi);
			}
			echo "<br/><br/><button type='button' class='btn'><a href='welcome.php'>Home</a></button>";
			mysqli_close($koneksi);
		}
     ?>
 </body>
 </html>