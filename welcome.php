<?php 
include("koneksi.php");
 session_start();
 if(!isset($_SESSION['nama'])){ 
  header("Location : login.php");
}
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
 </head >
<body background ="background-30.jpg">
 <a class="navbar-brand" href="welcome.php"><h3>PT. Kereta Api Indonesia</h3></a>
  <div class="container" >
      <div class="masthead">
        <h1 align="center"><b><font color="#ffffff">Tiket Kereta Api</font></b></h1>
        <h3 ><marquee title="Pesan"><font color="#ffffff">Selamat Datang Di Kereta Api Indonesia <?php echo $_SESSION["nama"] ?></font></marquee></h3>
     
    
  
    <?php  
      if ($_SESSION['level']=='admin') {
        echo '
        <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style ="color: white">PT.Kereta Api</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav nav-pills nav-justified">
          <li class="active" style="color: white"><h3>'.$_SESSION["level"].' : '.$_SESSION["nama"].'</h3></a></li> 
            <li class="active" style="color: yellow"><a href="welcome.php" style ="color: #76FF1F"><h4>Home</h4></a></li>
            <li > <a href="kereta.php" style ="color: white"><h4>Data Kereta</h4></a></li>
            <li > <a href="datapemesanan.php" style ="color: white"><h4>Data Pemesanan</h4></a></li>
            
           
              <ul class="dropdown-menu" role="menu">
               
              </ul>
              <li ><a href="logout.php" style ="color: white"><h4>Log Out</h4></a></li>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>';
      
      } else if ($_SESSION['level']=='user') {
          echo '
            <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
              <div class="navbar-header" >
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" 
                aria-controls="navbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                
              </div>
              <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav nav-pills nav-justified">
                <li class="navbar-brand" href="#" style ="color: white">PT.Kereta Api</li>
                <li class="active" style="color: red"><h3>'.$_SESSION["level"].' : '.$_SESSION["nama"].'</h3></a></li> 
                  <li class="active" style="color: white"><a href="welcome.php" style ="color: white"><h4>Home</h4></a></li>
                 
                    <ul class="dropdown-menu" role="menu">
                     
                    </ul>
                    <li ><a href="logout.php" style ="color: white"><h4>Log Out</h4></a></li>
                  </li>
                </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>';
        
      }
    ?>
      
    
    <?php  
      if ($_SESSION['level']=="admin") { 
        
        $select = "SELECT * FROM jadwalpemberangkatan";
        $result = mysqli_query($koneksi, $select);

       echo '<div class="container theme-showcase" role="main">
        <table class="table table-hover">
        <h1><center>Data Jadwal Pemberangkatan</center></h1>
        <thead><center>
          <tr>
            <th>No</th>
            <th>Nomer Kereta</th>
            <th>Keberangkatan</th>
            <th>Tujuan</th>
            <th>Waktu</th>
            <th>Harga</th>
            <th colspan="2" >Action</th>
          </tr></center>
        </thead>
        <tbody>';
    ?>
    <?php
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
         extract($row);

              echo "<tr>";
               echo "<td>$idkereta</td>";
                echo "<td>$nomerpemberangkatan</td>";
                echo "<td>$keberangkatan</td>";
                echo "<td>$tujuan</td>";
                echo "<td>$waktu</td>";
                echo "<td>$harga</td>";
                echo '<td align="center"><button class="btn"><a href="updatepemberangkatan.php?idkereta='.$idkereta.'">Edit</a></button></td>';
                echo '<td align="center"><button class="btn"><a href="deletepemberangkatan.php?idkereta='.$idkereta.'">Delete</a></button></td>';
              echo "</tr>"; 
            }
          ?>
          <td colspan="11" align="center"><center><button class="btn"><a href="insertpemberangkatan.php">Tambah Data</a></button>
        </tbody>
        </div>
        </table>';
        
          <?php
      } else if ($_SESSION['level'] == 'user') {

        echo '<form  method ="post">
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
      
      <table align="center" valign="midle" >';

        if(isset($_POST['Cari'])){
                $keberangkatan = $_POST['kereta1'];
                $tujuan = $_POST['kereta2'];
                $jumlah=$_POST['jumlah'];
                $tgl=$_POST['date'];
                                          
                $queryselect = "SELECT nomerpemberangkatan, namakereta, kelas,keberangkatan, kereta1.kotastasiun as kotastasiun1, 
                kereta1.namastasiun as namastasiun1,tujuan,kereta2.kotastasiun, kereta2.namastasiun, waktu, harga from kereta 
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
            }
      
    ?>
      </tbody>
    </table>  
    </div>
  </div>
  <footer class="footer" >
      <p align="center" style="color: #fffff">&copy;PT. Kereta Api Indonesia</p>
    </footer>
</body>
</html>