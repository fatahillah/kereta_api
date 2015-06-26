<?php 
	include("koneksi.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Laporan Keta api</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body bgcolor="pink">
	<div class="container">
	<h2><center>DAFTAR LAPORAN DAFTAR</center></h2>
	<table  class="table table-stripped">
	<thead align="center">
		<tr>
			<th><center>Id Gabung</center></th>
			<th><center>Id Kereta</center></th>
			<th><center>Keberangkatan</center></th>
			<th colspan="2"><center>Action</center></th>
		</tr>
	</thead>
	<tbody>
		<?php
			$selectkereta = "SELECT * FROM kereta";
			$resultkereta = mysqli_query($koneksi, $selectkereta);
			while($row = mysqli_fetch_array($resultkereta, MYSQLI_ASSOC)) {
				extract($row);
				echo "<tr>";
					echo "<td><center>$id</center></td>";
					echo "<td><center>$namakereta</center></td>";
					echo "<td><center>$kelas</center></td>";
					echo "<td align='center'><a href='updatepemberangkatan.php?id=$id'><IMG SRC='edit.png' width='25px'></a></td>";
					echo "<td align='center'><a href='deletepemberangkatan.php?id=$id'><IMG SRC='delete.png' width='25px'></a></td>";
				echo "</tr>"; 
			}
		?>
		<td colspan='11' align='center'><center><button class="btn"><a href='inserTpemberangkatan.php'>Tambah Data</a></button>
		<button class="btn btn-danger"><a href='welcome.php'><font color="white"><center>Home</center></font></a></button></center></td>
	
	</tbody>
	</table>
	<br/>
	</div>
</body>
</html>