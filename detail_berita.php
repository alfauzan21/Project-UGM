<?php
include '../config/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tb_berita WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
} else {
    echo "<script>alert('Berita tidak ditemukan.'); window.location.href='berita.php';</script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($row['nama_berita']); ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1><?php echo htmlspecialchars($row['nama_berita']); ?></h1>
        <img src="uploads/<?php echo $row['gambar']; ?>" alt="News Image" class="img-fluid">
        <p><strong>Tanggal:</strong> <?php echo date('d F Y', strtotime($row['tanggal_berita'])); ?></p>
        <p><?php echo nl2br(htmlspecialchars($row['deskripsi'])); ?></p>
        <a href="berita.php" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>
