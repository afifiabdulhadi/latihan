<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <!-- Bootstrap -->
    <link rel="icon" type="gambar/logo.png" href="gambar/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/stylenav.css">

</head>

<body>
    <?php include 'nav.php'; ?>

    <header class="text-center">
        <div class="container">
            <div class="container col-sm-4 col-lg-8 col-md-6">
                <img src="gambar/logo.png" class="container side-img left-img" alt="Gambar Kiri">
                <img src="gambar/cs.jpeg" alt="Gambar" class="header-img">
                <img src="gambar/images.jpg" class="container side-img right-img" alt="Gambar Kanan">
            </div>
            <div class="container col-sm-12 col-lg-4 col-md-6" style="margin-top: 50px;">
                <h3 class="fst-italic">Selamat datang! Ayo berkolaborasi dan </h3>
                <h3 class="fst-italic">menciptakan sesuatu yang hebat </h3>
            </div>
        </div>
    </header>

    <div class="container mt-5 mb-10">
        <h1 class="text-center mb-5">Tentang Kami</h1>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="profile-container">
                    <img src="gambar/wiki.jpeg" class="profile-img" alt="Foto Profil 1" />
                    <h2>Wiki Ramadan</h2>
                    <p>
                        <strong class="fst-italic">Posisi:</strong> Programmer <br>
                        <strong class="fst-italic">Lokasi:</strong> Padang, Sumatra Barat <br>
                        <strong class="fst-italic">Email:</strong> wikiramadan8@gmail.com
                    </p>
                    <a href="pages/detailkami1.php" class="btn btn-outline-secondary">Detail</a>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="profile-container">
                    <img src="gambar/iip.jpeg" class="profile-img" alt="Foto Profil 2" />
                    <h2>Afifi Abdul Hadi</h2>
                    <p>
                        <strong class="fst-italic">Posisi:</strong> UI/UX Designer <br>
                        <strong class="fst-italic">Lokasi:</strong> Bandung, Sumatra Barat <br>
                        <strong class="fst-italic">Email:</strong> Afifihadi7@gmail.com
                    </p>
                    <a href="pages/detailkami22.php" class="btn btn-outline-secondary">Detail</a>
                </div>
            </div>
        </div>
    </div>

    <h3 class="fst-italic display-3 text-center" style="margin-top: 120px;">Berita</h3>
    <div class="container md-5" style="margin-top: 50px;">
        <div class="row">

            <!-- Berita 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="gambar/banjir.jpg" class="card-img-top rounded mx-auto d-block"
                        alt="Gambar Banjir">
                    <div class="card-body">
                        <h5 class="news-title">Banjir Melanda Pangkalpinang</h5>
                        <p class="news-body" style="width: 350px;">Hujan deras selama tiga hari berturut-turut
                            menyebabkan banjir besar di daerah Pangkalpinang...</p>
                        <a href="pages/detailberita1.php" class="btn btn-outline-secondary">Detail</a>
                    </div>
                </div>
            </div>

                <!-- Berita 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="gambar/dpr.jpeg" class="card-img-top rounded mx-auto d-block"
                            alt="Gambar DPR">
                        <div class="card-body">
                            <h5 class="news-title">Anggota DPR Tertangkap Korupsi</h5>
                            <p class="news-body" style="width: 300px;">Seorang anggota DPR ditangkap oleh KPK atas
                                dugaan
                                kasus korupsi proyek infrastruktur...</p>
                            <a href="pages/detailberita2.php" class="btn btn-outline-secondary">Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Berita 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="gambar/kec.jpeg" class="card-img-top rounded mx-auto d-block "
                            alt="Gambar Kecelakaan">
                        <div class="card-body">
                            <h5 class="news-title">Kecelakaan di Jalan Tol</h5>
                            <p class="news-body" style="width: 310px;">Sebuah kecelakaan melibatkan mobil pribadi di
                                jalan
                                tol menyebabkan arus lalu lintas tersendat...</p>
                            <a href="pages/detailberita3.php" class="btn btn-outline-secondary">Detail</a>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <!-- Berita 4 -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="gambar/prabowo.jpg" class="card-img-top rounded mx-auto d-block"
                                alt="Gambar Prabowo">
                            <div class="card-body">
                                <h5 class="news-title">Prabowo dalam Perjalanan Politik</h5>
                                <p class="news-body" style="width: 300px;">Prabowo Subianto kembali mencalonkan diri
                                    sebagai
                                    presiden dengan dukungan dari berbagai partai...</p>
                                <a href="pages/detailberita4.php" class="btn btn-outline-secondary">Detail</a>
                            </div>
                        </div>
                    </div>

                    <!-- Berita 5 -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="gambar/kebakaranhutan.jpg" class="card-img-top rounded mx-auto d-block"
                                alt="Gambar Kebakaran Hutan">
                            <div class="card-body">
                                <h5 class="news-title">Kebakaran Hutan Meluas</h5>
                                <p class="news-body" style="width: 300px;">Kebakaran hutan yang terjadi di wilayah
                                    Sumatera
                                    semakin meluas dan mengakibatkan kerusakan lingkungan...</p>
                                <a href="pages/detailberita5.php" class="btn btn-outline-secondary">Detail</a>
                            </div>
                        </div>
                    </div>

                    <!-- Berita 6 -->
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="gambar/tauran.jpg" class="card-img-top rounded mx-auto d-block"
                                alt="Gambar Tauran">
                            <div class="card-body">
                                <h5 class="news-title">Tauran di Jakarta</h5>
                                <p class="news-body" style="width: 300px;">Sejumlah remaja tertangkap usai terlibat
                                    dalam aksi
                                    tawuran dngan kelopok lain di pusat kota Jakarta...</p>
                                <a href="pages/detailberita6.php" class="btn btn-outline-secondary">Detail</a>
                            </div>
                        </div>
                    </div>

                </div>

        </div>
        <a href="pages/tambahberita.php" class="btn btn-outline-secondary">TambahBerita</a>
    </div>

 
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.onscroll = function () {
            const navbar = document.getElementById('navbar');
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        };
    </script>
    
    <?php include 'pages/footer.php'; ?>

</body>

</html>