<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Berita - Website Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style-php.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Input Berita</h2>
        <form action="proses.php" method="POST" enctype="multipart/form-data">
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
