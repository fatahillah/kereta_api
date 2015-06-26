<?php 
include("koneksi.php");
 session_start();
 if(!isset($_SESSION['nama'])){ 
  header("Location : login.php");}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="icon" href="../../favicon.ico">

	    <title>Welcome</title>
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="justified-nav.css" rel="stylesheet">
	    <script src ="js/ie-emulation-modes-warning.js"></script>
	</head>
	<body bgcolor="pink">
		<a class="navbar-brand" href="welcome.php"><h3>PT. Kereta Api Indonesia</h3></a>
	  		<div class="container" >
		      <div class="masthead">
		        <h1 align="center"><b><font color="#ffffff">Tiket Kereta Api</font></b></h1>
		        <h3 ><marquee title="Pesan"><font color="#ffffff">Selamat Datang Di Kereta Api Indonesia <?php echo $_SESSION["nama"] ?></font></marquee></h3>
			<div class="container">
			<h2><center>DAFTAR NAMA KERETA</center></h2>
			<table  class="table table-stripped">

			<nav class="navbar navbar-inverse navbar-fixed-top">
			      <div class="container">
			        <div class="navbar-header" >
			          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			        </div>
			        <div id="navbar" class="navbar-collapse collapse">
			         <?php  
			          echo '
				        <nav class="navbar navbar-inverse navbar-fixed-top">
					      <div class="container">
					        <div class="navbar-header" >
					          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					            <span class="icon-bar"></span>
					          </button>
					          
				        </div>
				        <div id="navbar" class="navbar-collapse collapse">
				          <ul class="nav nav-pills nav-justified">
				          <li class="navbar-brand" href="#" style ="color: white">PT.Kereta Api</li>
				          <li class="active" style="color: red"><h3>'.$_SESSION["level"].' : '.$_SESSION["nama"].'</h3></a></li> 
				            <li ><a href="welcome.php" style ="color: white"><h4>Home</h4></a></li>
				            <li > <a href="kereta.php" style ="color: white"><h4>Data Kereta</h4></a></li>
				            <li class="active" style="color: yellow"> <a href="datapemesanan.php" style ="color: white"><h4>Data Pemesanan</h4></a></li>
				            
				           
				              <ul class="dropdown-menu" role="menu">
				               
				              </ul>
				              <li ><a href="logout.php" style ="color: white"><h4>Log Out</h4></a></li>
				            </li>
				          </ul>
				        </div><!--/.nav-collapse -->
				      </div>
				    </nav>';?>
			<thead align="center">
				<tr>
					<th><center>No Urut</center></th>
					<th><center>Nama Pelanggan</center></th>
					<th><center>Alamat</center></th>
					<th><center>Email</center></th>
					<th><center>No. Telp</center></th>
					<th><center>No. KTP</center></th>
				</tr>
			</thead>
			<tbody>
				<?php
					$select = "SELECT * FROM pelanggan";
					$result = mysqli_query($koneksi, $select);
					while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						extract($row);
						echo "<tr>";
						echo "<td><center>$id</center></td>";
							echo "<td><center>$namapelanggan</center></td>";
							echo "<td><center>$alamat</center></td>";
							echo "<td><center>$email</center></td>";
							echo "<td><center>$notelp</center></td>";
							echo "<td><center>$noktp</center></td>";
						echo "</tr>"; 
					}
				?>
				
			</tbody>
			</table>
			<br/>
		</div>
	</body>
</html>