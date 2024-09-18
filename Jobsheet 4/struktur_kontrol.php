<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor<br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus)<br>";
}
echo "<br>";


$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 0;


foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 92 || $nilai <= 70) {
        continue;
    }
    $totalNilai += $nilai;
    $avg = $totalNilai / count($nilaiSiswa);
}
echo "Rata-rata nilai: $avg <br><br>";


$totalPembelian = 106000;
$hargaProduk = 120000;
$diskon = 0.2;

if ($totalPembelian > 100000) {
    $hargaDiskon = $hargaProduk - ($hargaProduk * $diskon);
    echo "Harga Setelah Diskon: $hargaDiskon";
} else {
    echo "Harga Normal: $hargaProduk";
}

echo "<br><br>";

$skor = 500;
echo "Total Skor Pemain Adalah: $skor. <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? ";
echo ($skor > 500) ? "<b>YES</b>" : "<b>NO</b>";
?>