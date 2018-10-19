<?php 

	 function rata2()

	{
		$uas = $_POST['uas'];
		$uts = $_POST['uts'];
		$laporan = $_POST['laporan'];
		
		return ($uas*0.5) + ($uts*0.3) + ($laporan*0.2);
	}


	function predikat()
	{
			$predikat = rata2();

			if ($predikat >= 81 && $predikat <= 100) {
			echo "Anda Mendapatkan Predikat A";
			}
			elseif ($predikat >= 61 && $predikat <= 80) {
			echo "Anda Mendapatkan Predikat B";
			}
			elseif ($predikat >= 41 && $predikat <= 60) {
			echo "Anda Mendapatkan Predikat C";
			}

			else {
			echo "NGULANG AJA KAU";
			}
	}

	echo "<br>";


	echo "Nila Rata2nya adalah ".rata2();


	echo "<br>";

	echo predikat();

	//echo $predikat;
 ?>