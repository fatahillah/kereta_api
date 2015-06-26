<?php 
	include("koneksi.php");
	$idkereta = $_GET['idkereta'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Menghapus Pemberangkatan</title>
 	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
 </head>
 <body>
 	<form method="post" >
 		<?php
			$selectjadwalpemberangkatan = "SELECT * FROM jadwalpemberangkatan WHERE idkereta=$idkereta";
			$resultjadwalpemberangkatan = mysqli_query($koneksi, $selectjadwalpemberangkatan);
			$row = mysqli_fetch_array($resultjadwalpemberangkatan, MYSQLI_ASSOC);

			if (mysqli_num_rows($resultjadwalpemberangkatan) == " ") {
				echo '<font color="red">Data Keberangkatan tidak ditemukan harap cek kembali data idkeretanya.</font>';
			} else {
		?>
		<h3>Apakah anda yakin ingin menghapus data ini?</h3>
				<table>
					<tr>
						<td>Id Kereta</td>
						<td>:</td>
						<td><input type="text" name="Idkereta" disabled value="<?php echo $row['idkereta']; ?>"></td>
					</tr>
					<tr>
						<td>No Keberangkatan</td>
						<td>:</td>
						<td><input type="text" name="nomerpemberangkatan" disabled value="<?php echo $row['nomerpemberangkatan']; ?>"></td>
					</tr>
					<tr>
						<td colspan="3" align="center"><input type="submit" name="submit">
							<input type="button" value="Cancel" onclick="window.location='welcome.php'"></td>
					</tr>
				</table>
		    <?php
			}
			
			if (isset($_POST['submit'])) {
				$deletejadwalpemberangkatan = "DELETE FROM jadwalpemberangkatan WHERE idkereta='$idkereta'"; 
				if (mysqli_query($koneksi, $deletejadwalpemberangkatan)) {
					echo "Data berhasil dihapus";
					echo "<br/><br/><a href='jadwalpemberangkatan.php'>Kembali ke Data Mobil</a>";
				} else {
					echo "Error: ". $deletejadwalpemberangkatan ."<br/>". mysqli_error($koneksi);

				}
				mysqli_close($koneksi);
			}
		?>
 	</form>
 </body>
 </html>