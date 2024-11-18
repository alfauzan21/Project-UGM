<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama_berita = $_POST['nama_berita'];
    $kategori_berita = $_POST['kategori_berita'];
    $tanggal_berita = $_POST['tanggal_berita'];
    $deskripsi = $_POST['deskripsi'];

    // Proses upload gambar
    $target_dir = "uploads/";
    $gambar = $_FILES["gambar"]["name"];
    $target_file = $target_dir . basename($gambar);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Cek apakah file gambar
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if($check !== false) {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            // Tampilkan hasil dengan animasi dan styling
            echo "<div class='success-container'>";
            echo "<h3>🎉 Berita Berhasil Disimpan!</h3>";
            echo "<p><strong>Nama Berita:</strong> $nama_berita</p>";
            echo "<p><strong>Kategori:</strong> $kategori_berita</p>";
            echo "<p><strong>Tanggal:</strong> $tanggal_berita</p>";
            echo "<p><strong>Deskripsi:</strong> $deskripsi</p>";
            echo "<img src='$target_file' alt='Gambar Berita' class='uploaded-image'>";
            echo "</div>";
            echo "<button onclick='goBack()' class='btn'>Kembali</button>";
        } else {
            echo "<div class='error'>❌ Maaf, terjadi kesalahan saat mengunggah gambar.</div>";
        }
    } else {
        echo "<div class='error'>❌ File yang diunggah bukan gambar.</div>";
    }
} else {
    echo "<div class='error'>❌ Metode pengiriman tidak valid.</div>";
}
?>
