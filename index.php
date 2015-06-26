<?php  
	include("koneksi.php");
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemberangkatan</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">

    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<style type="text/css">
	  h1{
	  color: white;
	  background-color: black;
	  }
	  h3{
	  	background: blue;
	  	color: white;
	  }
	  th{
	  	background: blue;
	  	color: white;
	  }
	  td{
	  	background: white;
	  }
	 </style>
  </head>
	<body background="4.jpg">
		 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"><B>PT. Kereta Api Indonesia</B></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li class="dropdown">
			 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contact <span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu">
                <li><a href="http://www.facebook.com/pages/KAI121/180964378681978">Facebook</a></li>
                <li><a href="https://twitter.com/KAI121">Twetter</a></li>              </ul>
              <li><a href="login.php">Log in</a></li>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container theme-showcase" role="main">
	<div class="container">
      <div class="masthead">
      <h1><center>PT. Kereta Api Indonesia</center></h1>
        <h3><marquee title="Pesan">Welcome To PT. Kereta Api Indonesia Kami Siap Melayani Anda </marquee></h3>
		<form  method ="post">
			 <select name="kereta1">
                    <option value = "none"><center>---- STASIUN PEMBERANGKATAN ----</center></option>
                    <option value = "SMR" >---- SEMARANG -----</option>
                    <option value = "SL" > ---- SOLO ----</option>
                    <option value = "JKT" > ----- JAKARTA ----</option>
                    <option value = "SBY" > ---- SURABAYA ---- </option>
                    <option value = "BDG" > ---- BANDUNG ---- </option>
                    <option value = "BWI" > ---- BAYUWANGI ---- </option>
                    <option value = "MLG" > ---- MALANG ---- </option>
                    </select></tr>
              <tr>
              <select name="kereta2">
                    <option value = "none"><center>---- STASIUN TUJUAN ----</center></option>
                     <option value = "SMR" >---- SEMARANG -----</option>
                    <option value = "SL" > ---- SOLO ----</option>
                    <option value = "JKT" > ----- JAKARTA ----</option>
                    <option value = "SBY" > ---- SURABAYA ---- </option>
                    <option value = "BDG" > ---- BANDUNG ---- </option>
                    <option value = "BWI" > ---- BAYUWANGI ---- </option>
                    <option value = "MLG" > ---- MALANG ---- </option>
                    </select></tr>
                    <tr>
				<input type ="date" name="date" placeholder="Tanggal"> 
			</tr>
				<tr>
				<input type ="number" name ="jumlah" placeholder="Jumlah Penumpang"> 
			</tr>
				<td><button class="btn btn-primary" type="submit" name="Cari" >Cari Kereta Api  </button> </td>
				</tr>
			
			<table align="center" valign="midle" >		

		<?php  
				
							if(isset($_POST['Cari'])){
								$keberangkatan = $_POST['kereta1'];
								$tujuan = $_POST['kereta2'];
								$jumlah=$_POST['jumlah'];
								$tgl=$_POST['date'];
																					
								$queryselect = "SELECT nomerpemberangkatan, namakereta, kelas,keberangkatan, kereta1.kotastasiun as kotastasiun1, kereta1.namastasiun as namastasiun1,tujuan,kereta2.kotastasiun, kereta2.namastasiun, waktu, harga from kereta 
								right join jadwalpemberangkatan on kereta.id=jadwalpemberangkatan.idkereta 
								left join kereta1 on kereta1.idstasiun=jadwalpemberangkatan.keberangkatan 
								left join kereta2 on kereta2.idstasiun=jadwalpemberangkatan.tujuan
								where keberangkatan ='$keberangkatan' AND tujuan='$tujuan'";
								
								$result= mysqli_query($koneksi, $queryselect);
								if (mysqli_query($koneksi, $queryselect)) {
									while($row= mysqli_fetch_array($result, MYSQLI_ASSOC)){
										$total=$row['harga']*$jumlah;
										echo "<table class=table table-condensed>";
										
										echo "<tr>
										<th><center>No. Pemberangkatan</center></th>
										<th><center>Nama Kereta</center></th>
										<th><center>Keberangkatan</center></th>
										<th><center>Nama Kota Asal</center></th>
										<th><center>Nama Stasiun Asal</center></th>
										<th><center>Tujuan</center></th>
										<th><center>Nama Kota Tujuan</center></th>
										<th><center>Nama Stasiun Tujuan</center></th>
										<th><center>Waktu</center></th>
										<th><center>Total</center></th>
										</tr>";
							
										echo "<tr>";
										echo "<td><center>".$row ['nomerpemberangkatan']. "</center></td>";
										echo "<td><center>". $row['namakereta']. "</center></td>";
										echo "<td><center>". $row['keberangkatan']. "</center></td>";
										echo "<td><center>". $row['kotastasiun1']. "</center></td>";
										echo "<td><center>". $row['namastasiun1']. "</center></td>";
										echo "<td><center>". $row['tujuan']. "</center></td>";
										echo "<td><center>". $row['kotastasiun']. "</center></td>";
										echo "<td><center>". $row['namastasiun']. "</center></td>";
										echo "<td><center>". $row['waktu']. "</center></td>";	
										echo "<td><center>". $total. "</center></td></tr>";
										
										echo "<td><button type=submit class= 'btn'><a href='pilihkereta.php?nomerpemberangkatan=$row[nomerpemberangkatan]
										&total=$total&jumlah=$jumlah'>Pesan Sekarang </a></button></td> ";
										echo "</tr>";
									}
								}else{
									echo "Error: ". $queryselect. "<br>". mysqli_error($koneksi);
								}
								mysqli_close($koneksi);
							}
						?>
			</table>	
			</div >
      <!-- Site footer -->
      <footer class="footer" >
        <h7 align="right"><center>PT. KERETA API JAWA TIMUR - viberoptik &copy; 2015</center></h7>
      </footer>
    </div>

		</form>
	</body>
</html>