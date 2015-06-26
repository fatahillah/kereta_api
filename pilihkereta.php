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
    <title>form pendaftaran</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">

    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<style type="text/css">
	  h1{
	  color: black;
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
	<body>
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
<div class="body">
	<h1><center>Informasi Kontak Yang Dapat Dihubungi</center></h1>
<form method ="post" class="form-horizontal">
<div class="control-group">
	    <label class="control-label" for="inputnamapelanggan">No. Urut</label>
	    <div class="controls">
	      <input type="text" name="id" id="inputid" placeholder="No Urut">
	    </div>
	    </div>
		<div class="control-group">
	    <label class="control-label" for="inputnamapelanggan">Nama</label>
	    <div class="controls">
	      <input type="text" name="namapelanggan" id="inputnamapelanggan" placeholder="Nama">
	    </div>
	    </div>
	    <div class="control-group">
	    <label class="control-label" for="inputalamat">Alamat</label>
	    <div class="controls">
	      <textarea type="text" name="alamat" id="inputemail" placeholder="Masukkan Alamat Anda"></textarea>
	    </div>
	    </div>
	    <div class="control-group">
	    <label class="control-label" for="inputemail">Email</label>
	    <div class="controls">
	      <input type="email" name="email" id="inputemail" placeholder="email anda">
	    </div>
	    </div>
	    <div class="control-group">
	    <label class="control-label" for="inputnotelp">No. Telp</label>
	    <div class="controls">
	      <input type="text" name="notelp" id="inputnotelp" placeholder="08xxx">
	    </div>
	    </div>
	    <div class="control-group">
	    <label class="control-label" for="inputnoktp">No. KTP/SIM</label>
	    <div class="controls">
	      <input type="text" name="noktp" id="inputnoktp">
	      </div>
	    </div>
<input type ="submit" name="submit" value="submit">
	</td>
	<?php 
		include ("koneksi.php");

		if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$nama = $_POST['namapelanggan'];
		$alamat = $_POST['alamat'];
		$email = $_POST['email'];
		$notlp = $_POST['notelp'];
		$noktp = $_POST['noktp'];

		$query = "INSERT INTO `pelanggan`( `namapelanggan`, `alamat`, `email`, `notelp`, `noktp`) VALUES  ('$nama', '$alamat', '$email', $notlp, $noktp)";
				
		if (mysqli_query($koneksi, $query)) {
				echo "Data baru berhasil dibuat";
			} else {
				echo "Error: ". $query ."<br/>".mysqli_error($koneksi);
			}
			echo "<br/><br/><button type='button' class='btn'><a href='pembayaran.php'>Pembayaran</a></button>";
			mysqli_close($koneksi);
		}

	?>
		</table>
</form>
</body>
</html>