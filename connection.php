<?php
    // Informasi database
    $host = "localhost";
    $username = "root";
    $password = "1234";
    $database = "kue";

    // Membuat koneksi ke database
    $connection = mysqli_connect($host, $username, $password, $database);

    
    // Cek apakah koneksi berhasil atau tidak
    if (!$connection) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>
