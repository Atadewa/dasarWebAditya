<?php 
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil dari $a ditambah $b adalah $hasilTambah <br>";
echo "Hasil dari $a dikurangi $b adalah $hasilKurang <br>";
echo "Hasil dari $a dikali $b adalah $hasilKali <br>";
echo "Hasil dari $a dibagi $b adalah $hasilBagi <br>";
echo "Hasil dari $a sisa bagi $b adalah $sisaBagi <br>";
echo "Hasil dari $a pangkat $b adalah $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br>";
echo "Hasil perbandingan $a sama dengan $b : " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "Hasil perbandingan $a tidak sama dengan $b : " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "Hasil perbandingan $a lebih kecil dari $b : " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "Hasil perbandingan $a lebih besar dari $b : " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "Hasil perbandingan $a lebih kecil dari atau sama dengan $b : " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "Hasil perbandingan $a lebih besar dari atau sama dengan $b : " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";
?>