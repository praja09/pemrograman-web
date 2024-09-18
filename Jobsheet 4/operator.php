<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
// $hasilIdentik = $a === $b;
// $hasilTidakIdentik = $a !== $b;

echo "Hasil penjumlahan $a + $b = $hasilTambah<br>";
echo "Hasil pengurangan $a - $b = $hasilKurang<br>";
echo "Hasil perkalian $a * $b = $hasilKali<br>";
echo "Hasil pembagian $a / $b = $hasilBagi<br>";
echo "Sisa bagi $a % $b = $sisaBagi<br>";
echo "Hasil pangkat $a ** $b = $pangkat<br><br>";
echo "Hasil sama $a == $b = $hasilSama<br>";
echo "Hasil tidak sama $a != $b = $hasilTidakSama<br>";
echo "Hasil lebih kecil $a < $b = $hasilLebihKecil<br>";
echo "Hasil lebih besar $a > $b = $hasilLebihBesar<br>";
echo "Hasil lebih kecil sama $a <= $b = $hasilLebihKecilSama<br>";
echo "Hasil lebih besar sama $a >= $b = $hasilLebihBesarSama<br>";
echo "Hasil and $a && $b = $hasilAnd<br>";
echo "Hasil or $a || $b = $hasilOr<br>";
echo "Hasil not A $a ! $b = $hasilNotA<br>";
echo "Hasil not B $a ! $b = $hasilNotB<br><br>";

$a += $b;
echo "Hasil a += b = $a<br>";
$a -= $b;
echo "Hasil a -= b = $a<br>";
$a *= $b;
echo "Hasil a *= b = $a<br>";
$a /= $b;
echo "Hasil a /= b = $a<br>";
$a %= $b;
echo "Hasil a %= b = $a<br><br>";

$hasilIdentik = $a === $b;
echo "hasil $a === $b adalah $hasilIdentik<br>";
$hasilTidakIdentik = $a !== $b;
echo "hasil $a !== $b adalah $hasilTidakIdentik<br><br>";

$totalKursi = 45;
$kursiDipakai = 28;
$persenKursi = ($kursiDipakai/$totalKursi) * 100;
echo "hasil $kursiDipakai / $totalKursi adalah $persenKursi";
?>