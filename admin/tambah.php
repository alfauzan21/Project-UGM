<?php
include '../config/koneksi.php'; // Menyertakan file koneksi

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data dari form
    $nama_berita = $_POST['nama_berita'];
    $kategori_berita = $_POST['kategori_berita'];
    $tanggal_berita = $_POST['tanggal_berita'];
    $deskripsi = $_POST['deskripsi'];

    // Menangani upload gambar
    $gambar = $_FILES['gambar']['name'];
    $target = "uploads/" . basename($gambar);

    // Memindahkan gambar ke folder uploads
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target)) {
        // Query untuk memasukkan data ke tabel berita
        $query = "INSERT INTO tb_berita (nama_berita, kategori_berita, tanggal_berita, deskripsi, gambar) 
                  VALUES ('$nama_berita', '$kategori_berita', '$tanggal_berita', '$deskripsi', '$gambar')";

        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Berita berhasil ditambahkan'); window.location.href = 'index.php';</script>";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Gagal mengupload gambar.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Berita - Website Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/PHPIndex.css">
</head>
<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container-fluid justify-content-center">
            <div class="univ d-flex align-items-center">
                <span class="me-2 fs-5">Universitas</span>
                <img src="../assets/img/Lambang-UGM-putih.png" alt="Logo UGM" width="40" height="40" class="mx-2">
                <span class="ms-2 fs-5">Gadjah Mada</span>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="container mt-5">
        <h2>Input Berita</h2>
        <form action="tambah.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama_berita" class="form-label">Nama Berita</label>
                <input type="text" class="form-control" id="nama_berita" name="nama_berita" required>
            </div>
            <div class="mb-3">
                <label for="kategori_berita" class="form-label">Kategori Berita</label>
                <select class="form-select" id="kategori_berita" name="kategori_berita" required>
                    <option value="" disabled selected>Pilih Kategori</option>
                    <option value="Pendidikan">Pendidikan</option>
                    <option value="Prestasi">Prestasi</option>
                    <option value="Seputar Kampus">Seputar Kampus</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tanggal_berita" class="form-label">Tanggal Berita</label>
                <input type="date" class="form-control" id="tanggal_berita" name="tanggal_berita" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Berita</label>
                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Berita</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
