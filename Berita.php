<?php
include 'config/koneksi.php';
?>

<?php
$query = "SELECT * FROM tb_berita ORDER BY tanggal_berita DESC";
$result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Berita</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Style -->
    <link rel="stylesheet" href="style/berita_1.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg custom-navbar fixed-top">
        <div class="container-fluid position-relative">
            <!-- Logo dan Teks -->
            <a class="navbar-brand d-flex align-items-center text-white" href="#">
                <img src="assets/img/Lambang-UGM-putih.png" alt="Logo" width="40" height="40"
                    class="d-inline-block me-2">
                <div class="brand-text">
                    <span class="univ">Universitas</span>
                    <span class="gadjah-mada">Gadjah Mada</span>
                </div>
            </a>

            <!-- Toggler mode mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Ikon Media Sosial untuk layar besar (di tengah navbar) -->


            <!-- Link navigasi dan ikon media sosial -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pendidikan.html">Pendidikan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Berita.html">Berita</a>
                    </li>
                </ul>


                <!-- Ikon Media Sosial (hanya muncul di layar kecil) -->
                <ul class="navbar-nav d-lg-none mt-3">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com" target="_blank">
                            <i data-feather="instagram"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.youtube.com" target="_blank">
                            <i data-feather="youtube"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.twitter.com" target="_blank">
                            <i data-feather="twitter"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6">
                <h2>Prestasi</h2>
                <div class="card news-card">
                    <img src="assets/img/download.jpeg" class="card-img-top" alt="News Image">
                    <div class="card-body">
                        <div class="news-date">17 Oktober 2024</div>
                        <h5 class="card-title">UGM Dapat Penghargaan atas Ruang Aman Perempuan</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, veritatis
                            ipsa! Enim, vel adipisci! Recusandae sint quo nihil quam doloremque.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6">
                <h2>Pendidikan</h2>
                <div class="card news-card">
                    <img src="assets/img/download.jpeg" class="card-img-top" alt="News Image">
                    <div class="card-body">
                        <div class="news-date">30 September 2024</div>
                        <h5 class="card-title">UGM Luluskan 29 Akuntan Baru</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum est magni
                            obcaecati asperiores nostrum illum voluptate velit maxime dolorum quia?</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6">
                <h2>Penelitian</h2>
                <div class="card news-card">
                    <img src="assets/img/download.jpeg" class="card-img-top" alt="News Image">
                    <div class="card-body">
                        <div class="news-date">15 Oktober 2024</div>
                        <h5 class="card-title">UGM Kembali Masuk Peringkat THE WUR</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
                            doloremque repellendus, veritatis repudiandae sapiente veniam quas nulla maiores fuga
                            distinctio.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="card news-card small-card">
                    <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="News Image">
                    <div class="card-body">
                        <div class="news-date">25 September 2024</div>
                        <h5 class="card-title">Guru Besar UGM Dorong Pengelolaan Lingkungan</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quia sequi
                            sed aperiam veritatis fuga provident aliquid dolores cumque recusandae.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="card news-card small-card">
                    <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="News Image">
                    <div class="card-body">
                        <div class="news-date">13 Oktober 2024</div>
                        <h5 class="card-title">Rektor UGM Lepas 54 Tim PKM</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint culpa facere
                            velit voluptate voluptatibus pariatur, delectus ratione id exercitationem minus.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="card news-card small-card">
                    <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="News Image">
                    <div class="card-body">
                        <div class="news-date">17 Oktober 2024</div>
                        <h5 class="card-title">Peneliti UGM Kembangkan Alat Deteksi Cepat</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore labore,
                            quisquam optio maxime dicta magni esse alias impedit odit mollitia.</p>
                        <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

        </div>
    </div><div class="container mt-5">
    <div class="row g-4">
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="col-lg-4 col-md-6">
                <div class="card news-card">
                    <img src="uploads/<?php echo $row['gambar']; ?>" class="card-img-top" alt="News Image">
                    <div class="card-body">
                        <div class="news-date"><?php echo date('d F Y', strtotime($row['tanggal_berita'])); ?></div>
                        <h5 class="card-title"><?php echo htmlspecialchars($row['nama_berita']); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars(substr($row['deskripsi'], 0, 100)) . '...'; ?></p>
                        <a href="detail_berita.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>