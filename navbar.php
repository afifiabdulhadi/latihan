
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Gaya untuk video latar belakang */
        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Membuat video memenuhi latar belakang */
            z-index: -1;
            /* Menempatkan video di belakang konten */
        }
        body {
    font-family: 'Poppins', sans-serif;
}

        /* Gaya untuk header */
        header {
            background-color: rgba(255, 255, 255, 0.8);
            /* Warna latar belakang header dengan transparansi */
            padding: 20px;
        }

        .header-img {
            border-radius: 150%;
            max-width: 70%;
            /* Membuat gambar sedikit lebih lebar */
            width: 50%;
            /* Memastikan gambar tidak lebih dari lebar kontainer */
            height: auto;
            /* Menjaga rasio gambar */
        }
        .about-us {
            padding: 40px 0;
            /* Menambahkan padding di section About Us */
            text-align: center;
            /* Menyusun teks di tengah */
        }

        .about-us img {
            max-width: 30%;

            border-radius: 50%;
            /* Membuat gambar responsif */
            height: auto;
            /* Menjaga rasio gambar */
        }

        .btn-detail {
            margin-top: 10px;
            /* Margin untuk tombol detail */
        }

        .modal-header {
            background-color: #f8f9fa;
            /* Warna latar belakang header modal */
        }

        .modal-title {
            font-weight: bold;
            /* Menebalkan teks judul modal */
        }

        /* Gaya untuk musik */
        .music-section {
            padding: 40px 0;
            /* Padding untuk section musik */
            text-align: center;
            /* Menyusun teks di tengah */
            background-color: rgba(255, 255, 255, 0.8);
            /* Warna latar belakang section musik dengan transparansi */
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
        }
    </style>
</head>

<body>


    <!-- Navbar -->
    <nav class="container navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="gambar/logo.png" alt="#" style="width: 40px; height: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Menu navigasi di kiri -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="navbar.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="berita.php">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Tambah Berita</a>
                    </li>
                    <li class="nav-item dropdown">
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Aksi</a></li>
                            <li><a class="dropdown-item" href="#">Aksi lain</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sesuatu lainnya</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- Menu login dan register di kanan -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header di bawah navbar dengan dua kolom -->
    <header class="text-center">
        <div class="container">
            <div class="container col-sm-12 col-lg-8 col-md-6">
                <img src="gambar/cs.jpeg" alt="Gambar" class="header-img">
            </div>
            <div class="container col-sm-12 col-lg-4 col-md-6">
            <h3 class="fst-italic">Selamat Datang di Situs Kami</h3>
    <h3 class="fst-italic">Temukan berbagai musik menarik di sini!</h3>
    <h4 class="fst-italic">Agar pengalaman lebih asik, jelajahi sekarang!</h4>
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>foreveryoung:</strong> foreveryoung
                        <audio controls>
                            <source src="audio/forever.mp3" type="audio/mp3"> 
                            Your browser does not support the audio tag.
                        </audio>
                    </li>
                    <li class="list-group-item">
                        <strong>Bunga Abadi:</strong> bunga abadi
                        <audio controls>
                            <source src="audio/abadi.mp3" type="audio/mp3"> 
                            Your browser does not support the audio tag.
                        </audio>
                    </li>
                    <li class="list-group-item">
                        <strong>payphone:</strong> payphone
                        <audio controls>
                            <source src="audio/payphone.mp3" type="audio/mp3">
                            Your browser does not support the audio tag.
                        </audio>
                    </li>
                    <li class="list-group-item">
                        <strong>snap:</strong> snap
                        <audio controls>
                            <source src="audio/snap.mp3" type="audio/mp3"> 
                            Your browser does not support the audio tag.
                        </audio>
                    </li>
                    <li class="list-group-item">
                        <strong>It Wil Rain:</strong> It Wil Rain
                        <audio controls>
                            <source src="audio/itwillrain.mp3" type="audio/mp3">
                           
                            Your browser does not support the audio tag.
                        </audio>
                    </li>
                    <li class="list-group-item">
                        <strong>Daylight:</strong> Daylight
                        <audio controls>
                            <source src="audio/daylight.mp3" type="audio/mp3">
                            Your browser does not support the audio tag.
                        </audio>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Section About Us -->
    <div class="about-us">
    <h2>Tentang Kami</h2>
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12 col-lg-6 col-md-6">
            <img src="gambar/wiki.jpeg" alt="Foto Kami" class="img-fluid">
            <h3 class="fst-italic">Nama:</h3>
            <p class="fst-italic">Wiki Ramadan</p>
            <h3 class="fst-italic">Jurusan:</h3>
            <p class="fst-italic">Teknik Informatika, Sistem Informasi</p>
            <a href="detailkami1.php" class="btn btn-info btn-detail">Lihat Detail</a> <!-- Menuju halaman detail -->
        </div>
        <div class="col-sm-12 col-lg-6 col-md-6">
            <img src="gambar/iip.jpeg" alt="Foto Kami" class="img-fluid">
            <h3 class="fst-italic">Nama:</h3>
            <p class="fst-italic">Afifi Abdul Hadi</p>
            <h3 class="fst-italic">Jurusan:</h3>
            <p class="fst-italic">Teknik Informatika, Sistem Informasi</p>
            <a href="detailkami22.php" class="btn btn-info btn-detail">Lihat Detail</a> <!-- Menuju halaman detail -->
        </div>
    </div>
</div>


    <!-- Modal untuk Detail About Us 1 -->
    <div class="modal fade" id="aboutModal1" tabindex="-1" aria-labelledby="aboutModal1Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aboutModal1Label">Detail Tentang Kami</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Kami adalah lembaga pendidikan yang berfokus pada pengembangan keterampilan di bidang
                        teknologi informasi. Kami menawarkan berbagai program pelatihan dan sertifikasi untuk
                        membantu mencapai tujuan mereka.</p>
                    <p>Fasilitas kami meliputi laboratorium komputer yang modern, ruang kelas yang nyaman, dan
                        akses ke berbagai sumber daya online. Kami memiliki tenaga pengajar yang berpengalaman
                        dan siap membimbing menuju kesuksesan.</p>
                    <p>Dengan program-program kami, akan mendapatkan pengetahuan dan keterampilan yang
                        diperlukan untuk bersaing di dunia kerja yang semakin kompetitif.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk Detail About Us 2 -->
    <div class="modal fade" id="aboutModal2" tabindex="-1" aria-labelledby="aboutModal2Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aboutModal2Label">Detail Tentang Kami</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Kami adalah lembaga pendidikan yang berfokus pada pengembangan keterampilan di bidang
                        teknologi informasi. Kami menawarkan berbagai program pelatihan dan sertifikasi untuk
                        membantu mencapai tujuan mereka.</p>
                    <p>Fasilitas kami meliputi laboratorium komputer yang modern, ruang kelas yang nyaman, dan
                        akses ke berbagai sumber daya online. Kami memiliki tenaga pengajar yang berpengalaman
                        dan siap membimbing menuju kesuksesan.</p>
                    <p>Dengan program-program kami, akan mendapatkan pengetahuan dan keterampilan yang
                        diperlukan untuk bersaing di dunia kerja yang semakin kompetitif.</p>
                </div>
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 lubuksikaping. kanawk.</p>
    </footer>

    <!-- Bootstrap JS dan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>

</html>