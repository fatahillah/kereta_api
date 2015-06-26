<?php 
  include("koneksi.php");
 ?>
 <!DOCTYPE html>
 <html>
 <head>
  <title>Tambah Kereta</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
 </head>
 <body>
  <form method="post" class="form-horizontal">
    <div class="control-group">
    <label class="control-label" for="inputid">Id Kereta</label>
    <div class="controls">
      <input type="text" name="id" id="inputid" placeholder="No Urut">
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="inputnamakereta">Nama Kereta</label>
    <div class="controls">
      <input type="text" name="namakereta" id="inputnamakereta" placeholder="Nama Kereta">
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="inputkelas">Kelas</label>
    <div class="controls">
      <input type="text" name="kelas" id="inputkelas" placeholder="Kelas">
    </div>
    </div>
   <div class="control-group">
      <div class="controls">
        <button type="submit" class="btn" name="submit">Save Change</button>
      </div>
    </div>
    </form>

    <?php 
      if (isset($_POST['submit'])) {
      $id = $_POST['id'];
      $namakereta = $_POST['namakereta']; 
      $kelas = $_POST['kelas'];
      
    $insert = "INSERT INTO kereta VALUES ('$id','$namakereta','$kelas')";
      if (mysqli_query($koneksi, $insert)) {
        echo "Data baru berhasil dibuat";
      } else {
        echo "Error: ". $insert ."<br/>".mysqli_error($koneksi);
      }
      echo "<br/><br/><button type='button' class='btn'><a href='kereta.php'>Lanjut</a></button>";
      mysqli_close($koneksi);
    }
     ?>
 </body>
 </html>