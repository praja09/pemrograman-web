<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/anti_injection.php';
    require '../fungsi/pesan_kilat.php';
    if (!empty($_GET['jabatan'])) {
        $jabatan = antiinjection($koneksi, $_GET['jabatan']);
        $keterangan = antiinjection($koneksi, $_GET['keterangan']);
        $query = "INSERT INTO jabatan (jabatan, keterangan) VALUES ('$jabatan', '$keterangan')";
        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Baru ditambahkan.");
        } else {
            pesan('danger', "Menambahkan Jabatan karena: " . mysqli_error($koneksi));
        }
        header("Location: ../index.php?page=jabatan");
    }
}