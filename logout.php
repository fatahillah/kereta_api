<?php 

session_start();

session_destroy();
header("Location:login.php");
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';

 ?>