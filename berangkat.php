<form action="final.php" method="POST">
  	
  	<?php
	//$tujuan = $_POST['tujuan'];
	//$jam = $_POST['jam'];
	$jumlah = $_POST['jumlah'];

	for ($i=0; $i < $jumlah ; $i++) { 
		
		echo "Masukan Nama Penumpang : <input type='text' name='nama[]'><br> ";



	}



  ?>

<input type="submit" name="submit" value="lanjut">
 </form>