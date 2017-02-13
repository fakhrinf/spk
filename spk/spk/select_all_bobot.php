<?php
	include "koneksi.php";	

	$bobot_suhu = mysqli_query($connect, "SELECT * FROM bobot_suhu");
	$bobot_ph = mysqli_query($connect, "SELECT * FROM bobot_ph");
	$bobot_tinggidarat = mysqli_query($connect, "SELECT * FROM bobot_tinggi");
	$bobot_lama = mysqli_query($connect, "SELECT * FROM bobot_lama");
	$bobot_oksigen = mysqli_query($connect, "SELECT * FROM bobot_oks");
	$bobot_pakan = mysqli_query($connect, "SELECT * FROM bobot_pakan");
	$bobot_minat = mysqli_query($connect, "SELECT * FROM bobot_minat");
	$bobot_luas = mysqli_query($connect, "SELECT * FROM bobot_luas");
	
	$row['suhu'] = mysqli_fetch_assoc($bobot_suhu);
	$row['ph'] = mysqli_fetch_assoc($bobot_ph);
	$row['tinggi'] = mysqli_fetch_assoc($bobot_tinggidarat);
	$row['lama'] = mysqli_fetch_assoc($bobot_lama);
	$row['oksigen'] = mysqli_fetch_assoc($bobot_oksigen);
	$row['pakan'] = mysqli_fetch_assoc($bobot_pakan);
	$row['minat'] = mysqli_fetch_assoc($bobot_minat);
	$row['luas'] = mysqli_fetch_assoc($bobot_luas);

	echo json_encode($row);
	
	mysqli_close($connect);
?> 