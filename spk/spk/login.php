<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
	//getting value
	$username = $_POST ['username'];
	$password = $_POST ['password'];
	
	//creating sql query
	$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

	//importing koneksi.php
	
	require_once('koneksi.php');
	
	//executing query
	$result = mysqli_query($connect,$sql);
	
	//fetching result
	$check = mysqli_fetch_array($result);
	
	//if we got some result
	
	if(isset($check)){
	echo "success";
	}else{
	echo "failure";
	}
	mysqli_close($connect);
	}
?>