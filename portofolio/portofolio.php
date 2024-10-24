<?php
include('db.php'); // Menghubungkan ke database
include('includes/header.php'); // Menyertakan header

// Cek jika data sudah ada di tabel pages untuk halaman Home
$sql_check = "SELECT title, content FROM pages WHERE title = 'Portofolio'";
$result_check = $conn->query($sql_check);
{
    if ($conn->query($sql_insert) === TRUE) {
        echo "Data berhasil dimasukkan ke halaman Home.";
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }
} else {
    echo "Data untuk halaman Home sudah ada.";
}

$conn->close(); // Menutup koneksi database
include('includes/footer.php'); // Menyertakan footer
$conn->close(); // Menutup koneksi database
?>
