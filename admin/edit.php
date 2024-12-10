<?php
include '../config/koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tb_berita WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama_berita'];
    $kategori = $_POST['kategori_berita'];
    $tanggal = $_POST['tanggal_berita'];
    $deskripsi = $_POST['deskripsi'];

    $gambar = $_FILES['gambar']['name'];
    $target = "uploads/" . basename($gambar);

    if (!empty($gambar)) {
        move_uploaded_file($_FILES['gambar']['tmp_name'], $target);
        $query = "UPDATE tb_berita SET nama_berita='$nama', kategori_berita='$kategori', tanggal_berita='$tanggal', deskripsi='$deskripsi', gambar='$gambar' WHERE id=$id";
    } else {
        $query = "UPDATE tb_berita SET nama_berita='$nama', kategori_berita='$kategori', tanggal_berita='$tanggal', deskripsi='$deskripsi' WHERE id=$id";
    }

    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
    } else {
        echo "Gagal memperbarui data.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Edit Berita</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <div class="mb-3">
            <label for="nama_berita" class="form-label">Nama Berita</label>
            <input type="text" class="form-control" id="nama_berita" name="nama_berita" value="<?= $data['nama_berita']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="kategori_berita" class="form-label">Kategori Berita</label>
            <select class="form-select" id="kategori_berita" name="kategori_berita" required>
                <option value="Pendidikan" <?= $data['kategori_berita'] === 'Pendidikan' ? 'selected' : ''; ?>>Pendidikan</option>
                <option value="Prestasi" <?= $data['kategori_berita'] === 'Prestasi' ? 'selected' : ''; ?>>Prestasi</option>
                <option value="Seputar Kampus" <?= $data['kategori_berita'] === 'Seputar Kampus' ? 'selected' : ''; ?>>Seputar Kampus</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal_berita" class="form-label">Tanggal Berita</label>
            <input type="date" class="form-control" id="tanggal_berita" name="tanggal_berita" value="<?= $data['tanggal_berita']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required><?= $data['deskripsi']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Berita</label>
            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
            <small>Biarkan kosong jika tidak ingin mengganti gambar.</small>
        </div>
        <button type="submit" class="btn btn-primary">Update Berita</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
