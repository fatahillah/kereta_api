<?php 
include ("koneksi.php");
$nomerpemberangkatan = $_GET['nomerpemberangkatan'];

$query = "DELETE FROM jadwalpemberangkatan WHERE nomerpemberangkatan='$nomerpemberangkatan'";//yang dihapus adalah primary key nim, sehingga data yang memiliki primary key tersebut akan terhapus
mysqli_query($koneksi, $query);
 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
?>

