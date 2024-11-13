<?php
// Koneksi ke database

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB1', 'jobsheet10');

//periksa koneksi
$db1 = new mysqli(HOST,USER,PASS,DB1);
?>