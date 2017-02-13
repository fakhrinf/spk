<?php
	include "koneksi.php";
	
	$id 	= $_POST['id'];
	
	class emp{}
	
	if (empty($id)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Error Mengambil Data"; 
		die(json_encode($response));
	} else {
		$query 	= mysqli_query($connect, "SELECT * FROM jenis_ikan WHERE id='".$id."'");
		$row 	= mysqli_fetch_array($query);
		
		if (!empty($row)) {
			$response = new emp();
			$response->success = 1;
			$response->id = $row["id"];
			$response->nama_ikan = $row["nama_ikan"];
			$response->url_gambar = $row["url_gambar"];
			$response->suhu = $row["suhu"];
			$response->ph = $row["ph"];
			$response->tinggi_darat = $row["tinggi_darat"];
			$response->lama_ikan = $row["lama_ikan"];
			$response->oksigen = $row["oksigen"];
			$response->mudah_pakan = $row["mudah_pakan"];
			$response->minat_masy = $row["minat_masy"];
			$response->luas_kolam = $row["luas_kolam"];
			$response->deskripsi = $row["deskripsi"];
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error Mengambil Data";
			die(json_encode($response)); 
		}	

		mysqli_close($connect);
	}
?>