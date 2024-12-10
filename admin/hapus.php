<?php
include '../config/koneksi.php';

// Proses delete jika ada parameter id
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT gambar FROM tb_berita WHERE id = $id";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();

    // Hapus file gambar
    if (file_exists("uploads/" . $row['gambar'])) {
        unlink("uploads/" . $row['gambar']);
    }

    $deleteQuery = "DELETE FROM tb_berita WHERE id = $id";
    if ($conn->query($deleteQuery) === TRUE) {
        header("Location: hapus.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Fetch data dari database
$query = "SELECT * FROM tb_berita";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar Berita</h2>
        <a href="index.php" class="btn btn-primary mb-3">Tambah Berita</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Berita</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['nama_berita']; ?></td>
                        <td><?= $row['kategori_berita']; ?></td>
                        <td><?= $row['tanggal_berita']; ?></td>
                        <td><?= $row['deskripsi']; ?></td>
                        <td><img src="uploads/<?= $row['gambar']; ?>" alt="<?= $row['nama_berita']; ?>" width="100"></td>
                        <td>
                            <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
