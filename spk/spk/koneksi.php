<?php

	$server		= "localhost"; //alamat server yang digunakan
	$user		= "root"; //user web server
	$password	= ""; //password web server
	$database	= "spk"; //nama database
	
	$connect	= mysqli_connect ($server, $user, $password, $database) or die ("Koneksi gagal");
	// mysqli_select_db($database) or die ("Database belum siap!");
?>