<?php
	include "koneksi.php";
	
	$id 	= $_POST['id'];
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
	
	if (empty($id) || empty($nama_ikan) || empty($suhu)|| empty($ph)|| empty($tinggi_darat)|| empty($lama_ikan)|| empty($oksigen)|| empty($mudah_pakan)|| empty($minat_masy)|| empty($deskripsi)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Kolom isian tidak boleh kosong"; 
		die(json_encode($response));
	} else {
		// $query = mysqli_query($connect, "UPDATE jenis_ikan SET nama_ikan='".$nama_ikan."', url_gambar'".$url_gambar."', suhu='".$suhu."',ph='".$ph."',tinggi_darat='".$tinggi_darat."',lama_ikan='".$lama_ikan."',oksigen='".$oksigen."',mudah_pakan='".$mudah_pakan."',minat_masy='".$minat_masy."',luas_kolam='".$luas_kolam."',deskripsi='".$deskripsi."' WHERE id='".$id."'");

		$query = mysqli_query($connect, "UPDATE jenis_ikan SET nama_ikan='{$nama_ikan}', suhu='{$suhu}', ph='{$ph}', tinggi_darat='{$tinggi_darat}', lama_ikan='{$lama_ikan}', oksigen='{$oksigen}', mudah_pakan='{$mudah_pakan}', minat_masy='{$minat_masy}', luas_kolam='{$luas_kolam}', deskripsi='{$deskripsi}' WHERE id='{$id}'");
		
		if ($query) {
			$response = new emp();
			$response->success = 1;
			$response->message = "Data berhasil di update";
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error update Data";
			die(json_encode($response)); 
		}	

		mysqli_close($connect);
	}
?>