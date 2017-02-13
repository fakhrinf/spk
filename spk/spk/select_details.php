<?php
	include "koneksi.php";
	
	$id = $_POST['id'];

	$query = mysqli_query($connect, "SELECT * FROM jenis_ikan where id = '{$id}' ORDER BY nama_ikan ASC");
	
	$row = mysqli_fetch_assoc($query);
	
	// echo '<pre>',print_r($row),'</pre>';
	// exit();

	echo json_encode($row);
	
	mysqli_close($connect);
?> 