<?php
include('db.php'); // Menghubungkan ke database
include('includes/header.php'); // Menyertakan header

// Menentukan halaman yang ingin ditampilkan
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Query untuk mendapatkan data dari tabel pages
$sql = "SELECT title, content FROM pages WHERE title = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $page);
$stmt->execute();
$result = $stmt->get_result();

// Menampilkan konten halaman
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo '<h1>' . $row['title'] . '</h1>'; // Menampilkan judul
    echo '<p>' . $row['content'] . '</p>'; // Menampilkan konten
    echo '</div>';
    echo '</div>';
    echo '</div>';
} else {
    // Jika tidak ada data, tampilkan pesan ini
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo '<h1>Halaman tidak ditemukan</h1>'; // Pesan jika halaman tidak ditemukan
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

include('includes/footer.php'); // Menyertakan footer
?>
