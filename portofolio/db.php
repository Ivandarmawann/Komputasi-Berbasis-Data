<?php
$servername = "localhost";  // Sesuaikan dengan server database Anda
$username = "root";         // Username MySQL Anda
$password = "";             // Password MySQL Anda
$dbname = "portofolio";  // Nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
