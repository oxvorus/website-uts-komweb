<?php

// Aktifkan error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Informasi koneksi ke database
$serverName = "localhost";
$userName = "u834314004_uts_el";
$password = "MilfHunt3r";
$dbName = "u834314004_uts_el";

// Membuat koneksi
$koneksi = mysqli_connect($serverName, $userName, $password, $dbName, port:3306);

// Cek koneksi
if (!$koneksi) {
    // Hentikan skrip jika koneksi gagal
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>