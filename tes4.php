<?php  
 function perkalian($angka1, $angka2)
{
	$hasil = $angka1 * $angka2;
	return $hasil;
}


echo "Hasil Kalinya Adalah ".perkalian(5,10);

echo "<br/>";

echo substr("abcdef", 2); // mengembalikan "bcdef"
echo "<br/>";
echo substr("abcdef", 1, 3); // mengembalikan "bcd"
echo "<br/>";
echo substr("abcdef", 0, 4); // mengembalikan "abcd"
echo "<br/>";
echo substr("abcdef", 0, 8); // mengembalikan "abcdef"
echo "<br/>";
echo substr("abcdef", -1); // mengembalikan "f"
echo "<br/>";
echo substr("abcdef", -2); // mengembalikan "ef"
echo "<br/>";
echo substr("abcdef", -4, 2); // mengembalikan "cd"


?>