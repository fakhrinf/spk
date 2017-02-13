<?php 

include "koneksi.php";	

$valid_file = true;
$idikan = $_POST['id'];

if($_FILES['propic']['name'])
{
	//if no errors...
	if(!$_FILES['propic']['error'])
	{
		//now is the time to modify the future file name and validate the file
		$new_file_name = $_SERVER['DOCUMENT_ROOT']."/spk/img/foto_ikan{$idikan}.jpg";
		$url = "/spk/img/foto_ikan{$idikan}.jpg";//rename file
		if($_FILES['propic']['size'] > (1024000)) //can't be larger than 1 MB
		{
			$valid_file = false;
			$message = 'Oops!  Your file\'s size is to large.';
			echo json_encode(array('result' => 'fail', 'message' => $message));
		}
		
		//if the file has passed the test
		if($valid_file)
		{
			//move it to where we want it to be
			move_uploaded_file($_FILES['propic']['tmp_name'], $new_file_name);
			$message = 'Congratulations!  Your file was accepted.';
			$query = mysqli_query($connect, "UPDATE jenis_ikan SET `url_gambar`='{$url}' WHERE `id`={$idikan}");
			if ($query) {
				echo json_encode(array('result' => 'pass', 'message' => $message));				
			}else{
				echo json_encode(array('result' => 'fail', 'message' => $message));				
			}
		}
	}
	//if there is an error...
	else
	{
		//set that to be the returned message
		$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['propic']['error'];
	}
}

mysqli_close($connect);

 ?>