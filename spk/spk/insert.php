<?php
	include "koneksi.php";
	$nama_ikan 	= $_POST['namaikan'];
	// $url_gambar = $_POST['urlgambar'];
	$suhu = $_POST['suhu'];
	$ph = $_POST['ph'];
	$tinggi_darat = $_POST['tinggidarat'];
	$lama_ikan = $_POST['lamaikan'];
	$oksigen = $_POST['oksigen'];
	$mudah_pakan = $_POST['mudahpakan'];
	$minat_masy = $_POST['minatmasy'];
	$luas_kolam = $_POST['luaskolam'];
	$deskripsi = $_POST['deskripsi'];
	
	class emp{}
	
	if (empty($nama_ikan)  || empty($suhu) || empty($ph)|| empty($tinggi_darat)|| empty($lama_ikan)|| empty($oksigen)|| empty($mudah_pakan)|| empty($minat_masy)|| empty($luas_kolam)|| empty($deskripsi)){ 
		$response = new emp();
		$response->success = 0;
		$response->message = "Kolom isian tidak boleh kosong"; 
		die(json_encode($response));
	} else {
		$query = mysqli_query($connect, "INSERT INTO jenis_ikan (id,nama_ikan,suhu,ph,tinggi_darat,lama_ikan,oksigen,mudah_pakan,minat_masy,luas_kolam,deskripsi) VALUES('','".$nama_ikan."','".$suhu."','".$ph."','".$tinggi_darat."','".$lama_ikan."','".$oksigen."','".$mudah_pakan."','".$minat_masy."','".$luas_kolam."','".$deskripsi."')");
		
		if ($query) {
			$response = new emp();
			$response->success = 1;
			$response->message = "Data berhasil di simpan";
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error simpan Data";
			die(json_encode($response)); 
		}	

		mysqli_close($connect);
	}
?>