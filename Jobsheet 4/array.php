<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: " . implode(", ", $nilaiLulus);
echo "<br>";

$daftarKaryawan = [['Alice', 7], ['Bob', 3], ['Charlie', 9], ['David', 5], ['Eve', 6]];
$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] >= 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "Karyawan yang memiliki pengalaman lebih dari 5 tahun: " . implode(", ", $karyawanPengalamanLimaTahun);
echo "<br>";


$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75]
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ]
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $mahasiswa) {
    echo "Nama: {$mahasiswa[0]}, Nilai: {$mahasiswa[1]} <br>";
}
echo "<br>";


$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

$totalNilai = 0;
foreach ($daftarNilai as $mahasiswa) {
    $totalNilai += $mahasiswa[1];
    $avg = $totalNilai / count($daftarNilai);
}

foreach ($daftarNilai as $mahasiswa) {
    if ($mahasiswa[1] < $avg) {
        continue;
    }
    echo "Mahasiswa: {$mahasiswa[0]}, Nilai: {$mahasiswa[1]} <br>";
}