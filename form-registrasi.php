<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form registrasi</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">

    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	 <style type="text/css">
  h7{
  color: white;
  }
  </style>
</head>
<body background="5.jpg">
<h2 align="center">Form Pendaftaran</h2>
<form  method="post" >
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="kai.jpg" width="300px" height="50px" /></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contact <span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu">
                <li><a href="http://www.facebook.com/pages/KAI121/180964378681978">Facebook</a></li>
                <li><a href="https://twitter.com/KAI121">Twitter</a></li>
              </ul>
              <li class="active"><a href="form-registrasi">Sign Up</a></li>
              <li><a href="login.php">Log in</a></li>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container theme-showcase" role="main">
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
<div class ="table tabs left">
	<div class="form-group has-success has-feedback">
		<label class="control-label" for="inputSuccess2">Nama</label>
		<div class="controls">
		<input type="text" name="nama" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status" placeholder="Nama">
		 <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
 		 <span id="inputSuccess2Status" class="sr-only">(success)</span>
 		 </div>
	</div>
	<div class="form-group has-warning has-feedback">
		<label class="control-label" for="inputWarning2">Alamat</label>
		<div class="controls">
		<input type="text" class="form-control" id="inputWarning2" aria-describedby="inputWarning2Status" name="alamat" placeholder="Alamat">
		<span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
  		<span id="inputWarning2Status" class="sr-only">(warning)</span>
		</div>
	</div>
	<div class="form-group has-warning has-feedback">
		<label class="control-label" for="inputError2">Username</label>
		<div class="controls">
		<input type="text" class="form-control" id="inputError2" aria-describedby="inputError2Status" name="username" placeholder="Username">
		<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
  		<span id="inputError2Status" class="sr-only">(error)</span>
		</div>
	</div>
	<div class="form-group has-warning has-feedback">
		<label class="control-label" for="inputWarning2" >Password</label>
		<div class="controls">
		<input type="password"  class="form-control" id="inputError2" aria-describedby="inputError2Status" name="password" placeholder="Password">
		<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
  		<span id="inputError2Status" class="sr-only">(error)</span>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn btn-info" name="submit">Submit</button>
		</div>
	</div>
	</div>
</form>
				<?php 
					include("koneksi.php");

					if (isset($_POST['submit'])) {
						$nama = $_POST['nama'];
						$alamat = $_POST['alamat'];
						$username = $_POST['username'];
						$password = md5($_POST['password']);
						$level = $_POST['level'];

						$sqlinsert = "INSERT INTO user (nama, alamat, username, password, level)
										VALUES ('$nama', '$alamat', '$username', '$password', '$level')";
						if (mysqli_query($koneksi, $sqlinsert)) {
							echo "New record created successfully";
							echo '<META http-equiv="refresh" content="1; URL=form-registrasi.php">';
						}	else {
							echo "Error: " . $sqlinsert . "<br>" . mysql_error($koneksi);
						}
						mysqli_close($koneksi);
					}

				 ?>
				<div>
				 <footer class="footer" >
        <h7><center>PT. KERETA API JAWA TIMUR - viberoptik &copy; 2015</center></h7>
      </footer>
		  </div>
	</div>
	</div>
</body>
</html>