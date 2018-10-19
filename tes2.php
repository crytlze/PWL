<!DOCTYPE html>
<html>
<head>
	<title>PENDAFTARAN</title>
</head>
<body>
	<form method="POST" action="tes3.php" enctype="multipart/form-data">
		Masukan Nama : <input type="text" name="nama">
		<br>
		Masukan Password : <input type="password" name="password">
		<br>
		Masukan Email : <input type="Email" name="Email">

		<br>
		<input type="radio" name="kelamin" value="laki laki">Laki Laki 
		<input type="radio" name="kelamin" value="Prempuan ">Prempuan
		<br>

		<select>
			<option value="DOTA 2">DOTA 2</option>
			<option value="MOBILE LEGEND">MOBILE LEGEND</option>
			<option value="PEWUBEGEH">PEWUBEGEH</option>

		</select>

		<br>
		<input type="file" name="upload">
		<br>


		<input type="submit" name="submit" placeholder="DAFTAR">



	</form>

	

</body>
</html>

