<?php
	$servername = "mysql.idhostinger.com";
	$username = "u991304230_ka";
	$password = "keretaapi";
	$databasename = "u991304230_ka";

	$koneksi = mysqli_connect($servername, $username, $password, $databasename);

	if(mysqli_connect_errno()){
		printf ("Connect failed %s\n", mysqli_connect_error());
		exit();
	}
?>