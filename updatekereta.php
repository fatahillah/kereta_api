<?php 
	include ("koneksi.php");
	$id = $_GET['id'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>edit Data Kereta</title>
 	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
 </head>
 <body>
 	<form method="post" class="form-horizontal">
 		<?php 
 			$select = "SELECT * FROM kereta WHERE id='$id'";
			$result = mysqli_query($koneksi, $select);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			if (mysqli_num_rows($result) == " "){
				echo '<font color="red">Data tidak ditemukan.</font>';
			} else {
 		 ?>
 		 <h3><center>Form Edit Data Kereta</center></h3>
 		 <div class="control-group"><center>
		    <label class="control-label" for="inputid">Id Kereta</label>
		    <div class="controls">
		      <input type="text" name="id" id="inputid" disabled value="<?php echo $row['id']; ?>">
		    </div>
		    </div></center>
		  <div class="control-group"><center>
		    <label class="control-label" for="inputnamakereta">Nama Kereta</label>
		    <div class="controls">
		      <input type="text" name="namakereta" id="inputnamakereta" value="<?php echo $row['namakereta']; ?>">
		    </div>
		    </div></center>
		  	<div class="control-group"><center>
		    <label class="control-label" for="inputkelas">Kelas</label>
		    <div class="controls">
		    <input type="text" name="kelas" id="inputkelas" value="<?php echo $row['kelas']; ?>">
		    </div>
		    </div></center>
		    <div class="control-group"><center>
		    	<div class="controls">
		  			<button type="submit" name="submit" class="btn">Submit</button>
		    	</div>
		    </div></center>
 		</form>
 	<?php 
 		}
			if (isset($_POST['submit'])) {
					$namakereta = $_POST['namakereta'];
					$kelas = $_POST['kelas'];
					$update = "UPDATE kereta SET namakereta='$namakereta', kelas='$kelas' WHERE id='$id'";
					if (mysqli_query($koneksi, $update)) {
						echo "Data berhasil diupdate";
						echo "<br/><br/><a href='kereta.php'>Kembali ke Data Pemberangkatan</a>";					
					} else {
					echo "Error: ". $update ."<br/>". mysqli_error($koneksi);
				}	
				
			mysqli_close($koneksi);
		}
 	 ?>
 </body>
 </html>