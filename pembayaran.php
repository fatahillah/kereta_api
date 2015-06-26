<?php  
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kereta Api Indonesia</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">

    <script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
    <style type="text/css">
      h5{
          border:1px solid silver;
          width: 90%;
          
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
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
			 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contact <span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu">
                <li><a href="http://www.facebook.com/pages/KAI121/180964378681978">Facebook</a></li>
                <li><a href="https://twitter.com/KAI121">Twetter</a></li>              
               </ul>
              <li><a href="login.php">Log in</a></li>
              <li><a href="logout.php">Log out</a></li>
              <li class="active"><a href="pembayaran.php">Pembayaran</a></li>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
   <h2 align="center"><font face="times new roman" color="red"><b>SLIP PEMBAYARAN TIKET </b></font>
   <font face="arial" color="black"><b><br/>KERETA API INDONESIA</b></font></h2>
  
         <hr><h3 align="center"><font face="Cambria Math" color="blue">No. Rekening Pembayaran :
         </font><font face="Bodoni MT" color="red"><u> 6013 0113 9685 5594</u></font></h3>
         
          <h4 align="center"><font face="Cambria Math" color="blue">Pembayaran harus dilakukan sebelum tanggal dan jam : <u><?php $d=strtotime("tomorrow"); echo date
          ("y-m-d h:i:sa", $d)."<br>"; ?></u></font></h4></hr>
        
<?php  
              
  ?>
        <hr><h4 align="left"><font face="Cambria Math" color="blue">Pembayaran dapat dilakukan melalui :</font></h4>
        <ul align="left"><font face="Cambria Math" color="blue"><li>ATM Bank Mandiri<li>ATM Bersama<li>Internet Banking Bank Mandiri
        <li>SMS Banking Bank Mandiri<li>Kantor Pos Online<li>ATM Bank BRI<li>Internet Banking Bank BRI<li>SMS Banking Bank BRI
        <li>ATM Bank BCA<li>Internet Banking Bank BCA<li>SMS Banking Bank BCA<li>ATM Bank BNI<li>Internet Banking Bank BNI
        <li>SMS Banking Bank BNI</li></font></ul></hr>

         <hr><h4 align="center"><font face="Cambria Math" color="blue">Apabila ada hal-hal yang kurang jelas tentang tata cara pembayaran 
         biaya Tiket Kereta Api Indonesia, Anda dapat menghubungi Help Desk PT. Kereta Api Indonesia dengan nomor telpon <b>087-759-997-755</b></hr>
         <hr></hr>
</body>
</html>