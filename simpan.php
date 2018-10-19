<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	Data Telah dimasukan 

	<br>
	<br>

	Data yang anda Masukan Sebagai Berikut : 
	<?php 
		echo "<br>";
		echo "Nama : ".$_POST['nama'];
		echo "<br>";
		echo "Umur : ".$_POST['umur'];

		echo "<br>";
		echo "Email  : ".$_POST['email'];
		echo "<br>";
	 ?>


</body>
</html>

