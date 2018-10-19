<!DOCTYPE html>
<html>
<head>
	<title>Nilai Mahasiswa</title>
</head>
<body>
	<h1>Selamat datang <?php $nama ?></h1>
	<br>
	<form action="hasil.php" method="POST">
		Nilai UAS : <input type="text" name="uas"><br>
		Nilai UTS : <input type="text" name="uts"><br>
		Nilai Laporan : <input type="text" name="laporan"><br>

		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>