<?php
	try {
		
		$pdo = new PDO('mysql:host=localhost;dbname=spk','root','');
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch (Exception $e) {
		
		$output = 'Unable to connect to database: ' . $e->getMessage();
		// include $_SERVER['DOCUMENT_ROOT'] . '/viarstore/_includes/output.html.php';
		exit();
	}

	$suhu = json_decode($_POST['suhu']);
	$ph = json_decode($_POST['ph']);
	$tinggi = json_decode($_POST['tinggi']);
	$lama = json_decode($_POST['lama']);
	$luas = json_decode($_POST['luas']);
	$oksigen = json_decode($_POST['oksigen']);
	$minat = json_decode($_POST['minat']);
	$mudah = json_decode($_POST['mudah']);
	
	// echo json_encode(array('suhu' => $suhu->{'sangatrendah'}, 'ph' => $ph->{'sangatrendah'}));

	// $query = "START TRANSACTION"

	// mysqli_autocomit($con, FALSE);

	try {
		$query = "UPDATE bobot_suhu SET `suhu_sgt_rdh`=:sangatrendah, `suhu_rdh_1`=:rendah1, `suhu_rdh_2`=:rendah2, `suhu_sdg_1`=:sedang1, `suhu_sdg_2`=:sedang2, `suhu_ting_1`=:tinggi1, `suhu_ting_2`=:tinggi2, `suhu_sgt_ting`=:sangattinggi WHERE `id_bobot_suhu`=1";
		$s = $pdo->prepare($query);
		$s->bindParam(':sangatrendah', $suhu->{'sangatrendah'});
		$s->bindParam(':rendah1', $suhu->{'rendah_1'});
		$s->bindParam(':rendah2', $suhu->{'rendah_2'});
		$s->bindParam(':sedang1', $suhu->{'sedang_1'});
		$s->bindParam(':sedang2', $suhu->{'sedang_2'});
		$s->bindParam(':tinggi1', $suhu->{'tinggi_1'});
		$s->bindParam(':tinggi2', $suhu->{'tinggi_2'});
		$s->bindParam(':sangattinggi', $suhu->{'sangattinggi'});

		$s->execute();	

		$query = "UPDATE bobot_ph SET `ph_sgt_rdh`=:sangatrendah, `ph_rdh_1`=:rendah1, `ph_rdh_2`=:rendah2, `ph_sdg_1`=:sedang1, `ph_sdg_2`=:sedang2, `ph_ting_1`=:tinggi1, `ph_ting_2`=:tinggi2, `ph_sgt_ting`=:sangattinggi WHERE `id_bobot_ph`=1";
		$s = $pdo->prepare($query);
		$s->bindParam(':sangatrendah', $ph->{'sangatrendah'});
		$s->bindParam(':rendah1', $ph->{'rendah_1'});
		$s->bindParam(':rendah2', $ph->{'rendah_2'});
		$s->bindParam(':sedang1', $ph->{'sedang_1'});
		$s->bindParam(':sedang2', $ph->{'sedang_2'});
		$s->bindParam(':tinggi1', $ph->{'tinggi_1'});
		$s->bindParam(':tinggi2', $ph->{'tinggi_2'});
		$s->bindParam(':sangattinggi', $ph->{'sangattinggi'});

		$s->execute();	

		$query = "UPDATE bobot_tinggi SET `ting_sgt_rdh`=:sangatrendah, `ting_rdh_1`=:rendah1, `ting_rdh_2`=:rendah2, `ting_sdg_1`=:sedang1, `ting_sdg_2`=:sedang2, `ting_ting_1`=:tinggi1, `ting_ting_2`=:tinggi2, `ting_sgt`=:sangattinggi WHERE `id_bobot_tinggi`=1";
		$s = $pdo->prepare($query);
		$s->bindParam(':sangatrendah', $tinggi->{'sangatrendah'});
		$s->bindParam(':rendah1', $tinggi->{'rendah_1'});
		$s->bindParam(':rendah2', $tinggi->{'rendah_2'});
		$s->bindParam(':sedang1', $tinggi->{'sedang_1'});
		$s->bindParam(':sedang2', $tinggi->{'sedang_2'});
		$s->bindParam(':tinggi1', $tinggi->{'tinggi_1'});
		$s->bindParam(':tinggi2', $tinggi->{'tinggi_2'});
		$s->bindParam(':sangattinggi', $tinggi->{'sangattinggi'});

		$s->execute();	

		$query = "UPDATE bobot_lama SET 
				`lama_sgt_rdh`=:sangatrendah, 
				`lama_rdh_1`=:rendah1, 
				`lama_rdh_2`=:rendah2, 
				`lama_sdg_1`=:sedang1, 
				`lama_sdg_2`=:sedang2, 
				`lama_ting_1`=:tinggi1, 
				`lama_ting_2`=:tinggi2, 
				`lama_sgt_ting`=:sangattinggi 
				WHERE `id_lama`=1";
		$s = $pdo->prepare($query);
		$s->bindParam(':sangatrendah', $lama->{'sangatrendah'});
		$s->bindParam(':rendah1', $lama->{'rendah_1'});
		$s->bindParam(':rendah2', $lama->{'rendah_2'});
		$s->bindParam(':sedang1', $lama->{'sedang_1'});
		$s->bindParam(':sedang2', $lama->{'sedang_2'});
		$s->bindParam(':tinggi1', $lama->{'tinggi_1'});
		$s->bindParam(':tinggi2', $lama->{'tinggi_2'});
		$s->bindParam(':sangattinggi', $lama->{'sangattinggi'});

		$s->execute();

		$query = "UPDATE bobot_luas SET `luas_sgt_rdh`=:sangatrendah, `luas_rdh_1`=:rendah1, `luas_rdh_2`=:rendah2, `luas_sdg_1`=:sedang1, `luas_sdg_2`=:sedang2, `luas_ting_1`=:tinggi1, `luas_ting_2`=:tinggi2, `luas_sgt_ting`=:sangattinggi WHERE `id_luas`=1";
		$s = $pdo->prepare($query);
		$s->bindParam(':sangatrendah', $luas->{'sangatrendah'});
		$s->bindParam(':rendah1', $luas->{'rendah_1'});
		$s->bindParam(':rendah2', $luas->{'rendah_2'});
		$s->bindParam(':sedang1', $luas->{'sedang_1'});
		$s->bindParam(':sedang2', $luas->{'sedang_2'});
		$s->bindParam(':tinggi1', $luas->{'tinggi_1'});
		$s->bindParam(':tinggi2', $luas->{'tinggi_2'});
		$s->bindParam(':sangattinggi', $luas->{'sangattinggi'});

		$s->execute();

		$query = "UPDATE bobot_oks SET `oks_sgt_rdh_1`=:sangatrendah,`oks_sgt_rdh_2`=:sangatrendah2, `oks_rdh_1`=:rendah1, `oks_rdh_2`=:rendah2, `oks_sdg_1`=:sedang1, `oks_sdg_2`=:sedang2, `oks_ting_1`=:tinggi1, `oks_ting_2`=:tinggi2, `oks_sgt_ting`=:sangattinggi WHERE `id_oks`=1";
		$s = $pdo->prepare($query);
		$s->bindParam(':sangatrendah', $oksigen->{'sangatrendah'});
		$s->bindParam(':sangatrendah2', $oksigen->{'sangatrendah2'});
		$s->bindParam(':rendah1', $oksigen->{'rendah_1'});
		$s->bindParam(':rendah2', $oksigen->{'rendah_2'});
		$s->bindParam(':sedang1', $oksigen->{'sedang_1'});
		$s->bindParam(':sedang2', $oksigen->{'sedang_2'});
		$s->bindParam(':tinggi1', $oksigen->{'tinggi_1'});
		$s->bindParam(':tinggi2', $oksigen->{'tinggi_2'});
		$s->bindParam(':sangattinggi', $oksigen->{'sangattinggi'});

		$s->execute();

		$query = "UPDATE bobot_minat SET `minat_tdk_suka`=:sangatrendah, `minat_krg_suka`=:rendah, `minat_sdg`=:sedang, `minat_suka`=:tinggi, `minat_sgt_suka`=:sangattinggi WHERE `id_minat`=1";
		$s = $pdo->prepare($query);
		$s->bindParam(':sangatrendah', $minat->{'sangatrendah'});
		$s->bindParam(':rendah', $minat->{'rendah'});		
		$s->bindParam(':sedang', $minat->{'sedang'});		
		$s->bindParam(':tinggi', $minat->{'tinggi'});		
		$s->bindParam(':sangattinggi', $minat->{'sangatminat'});

		$s->execute();

		$query = "UPDATE bobot_pakan SET `pkn_sgt_tdk_mdh`=:sangatrendah, `pkn_tdk_mdh`=:rendah, `pkn_sdg`=:sedang, `pkn_mdh`=:tinggi, `pkn_sgt_mdh`=:sangattinggi WHERE `id_pakan`=1";
		$s = $pdo->prepare($query);
		$s->bindParam(':sangatrendah', $mudah->{'sangatrendah'});
		$s->bindParam(':rendah', $mudah->{'rendah'});		
		$s->bindParam(':sedang', $mudah->{'sedang'});		
		$s->bindParam(':tinggi', $mudah->{'mudah'});		
		$s->bindParam(':sangattinggi', $mudah->{'sangatmudah'});

		$s->execute();

		echo json_encode(array('result' => 'pass', 'message' => 'Data updated'));
	} catch (PDOException $e) {
		echo json_encode(array('result' => 'fail', 'message' => $e->getMessage()));
	}
?>