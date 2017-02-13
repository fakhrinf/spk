<?php
	include "koneksi.php";

	$query = mysqli_query($connect, "SELECT * FROM jenis_ikan ORDER BY nama_ikan ASC");
	
	$json = array();
	
	while($row = mysqli_fetch_assoc($query)){
		$json[] = $row;
	}
	
	echo json_encode($json);
	
	mysqli_close($connect);
?> 