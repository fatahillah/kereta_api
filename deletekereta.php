<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login kai</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">

    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
  </head>

  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><B>KERETA API INDONESIA</B></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav" align="right">
              <li><a href="home.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
       <div class="hero-unit">
        <h2>Form Hapus Data</h2>
        <form method="post">
      <?php  
            include("koneksi.php");
            $id= $_GET['id'];

            $select = "SELECT * FROM kereta WHERE id='$id'";
            $result = mysqli_query($koneksi, $select);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            
            if (isset($_POST['submit'])){
              
              $delete="DELETE FROM kereta WHERE id='$id'";

              if (mysqli_query($koneksi, $delete)) {
                echo "<center>Data berhasil di dihapus</center>";
                echo "<br/><left><a href='kereta.php' class='btn btn-primary'>KEMBALI</a></left><br/>";
                #header("location: kereta.php");
              }else{
                echo "Error: ".$delete."<br/>".mysqli_error($koneksi);
              }
              mysqli_close($koneksi);
            }
          ?>
        <h6><marquee>Anda Yakin Ingin Menghapus Data Ini....!!!</marquee></h6>

        <div class="container" align="center">
          <form class="form-horizontal" >
          <div class="control-group">
            <label>Kode Kereta :</label>
            <div class="controls"><input type="text" name="idkereta" disabled value="<?php echo $row['id']; ?>">
            </div></div>
            <label><button type="submit" name="submit" class="btn btn-primary">Submit</button></label>
            </div></div>
          </form>
          </div
    </form>
      <hr>
      <footer>
        <h7 align="right">PT. KERETA API JAWA TIMUR - viberoptik &copy; 2015</h7>
      </footer>
    </div>
  </body>
</html>
      
