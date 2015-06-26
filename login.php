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
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" 
          aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand"><B>PT. Kereta Api Indonesia</B></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="login.php">Log in</a></li>
            <li><a href="form-registrasi.php">Daftar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
      <form class="form-sigin" method="post">
    <h2  class="form-sigin-heading" > Please sigin in </h2>
    <input type="text" name="username" class="input-block-level" palaceholder="username">
    <input type="password" name="password" class="input-block-level" palaceholder="password">
    <button class="btn btn-large btn-primary" type="submit" name="submit">Sign in </button>
    <br/>
    <tr>
      Belum Punya Akun ??? <a href="form-registrasi.php">Sign Up</a>
    </tr>
  
  <?php 
  include("koneksi.php");
  session_start(); 
  
  if(isset($_POST['submit'])){
  $username =$_POST['username'];
  $password = md5($_POST['password']);
  $_SESSION['username'] = $username;
  
  $sqlselect = "SELECT * FROM user WHERE username='$username' AND password='$password'";
   $result =mysqli_query($koneksi,$sqlselect);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
  if (mysqli_num_rows($result)==1)  {
  $_SESSION['nama'] = $row['nama'];
  $_SESSION['level'] = $row['level'];
   
  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=welcome.php">'; 
  }else{
    echo "<div class='alert alert-danger' role='alert'> Login gagal! Perikswa kembali username password anda";
  }
  mysqli_close($koneksi);

  }
  
  ?>
  
    </div> 
    </form>
    <hr>
      <footer>
        <p align="center">PT. Kereta Api Indonesia &copy; 2015</p>
      </footer>
    </div>
  </body>
</html>