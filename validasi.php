<?php 
	$nama = $_POST['nama'];
	$pass = $_POST['password'];

	$bolehloginnama = array("yupi","melody","nabilah");

	if ($nama == "admin" && $pass == "123") {
		echo "Selamat anda Telah Login";
		header("Location: nilai.php");
	}
	else
	{
		echo "Data yang anda inputkan salah";
	}

	echo "<pre>";
	print_r($bolehloginnama);

	
 ?>