<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        body {
            padding-top: 56px;
        }

        .scrolled {
            background-color: white !important;
            transition: background-color 0.3s;
        }
       
        header {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
        }

        .header-img {
            border-radius: 150%;
            max-width: 70%;
            width: 50%;
            height: auto;
        }
        .side-img {
    position: absolute;
    width: 20%; 
    height: auto;
    top: 50%;
    transform: translateY(-50%);
}

        .left-img {
    left: 80%;
    margin-left: -80px;
}

.right-img {
    right: 80%;
    margin-right: -80px;
}
@media (max-width: 576px) { /* Aturan untuk layar ponsel */
    .side-img, .header-img {
        width: 20%; /* Membuat semua gambar memenuhi lebar container */
        margin: 5px 0; /* Mengurangi jarak antar gambar */
    }
}
        
       .about-us {
            padding: 40px 0;
            text-align: center;
        } 

        .about-us img {
            max-width: 30%;
            height: auto;
        }
        .profile-img {
            width: 250px; 
            height: 250px; 
            border-radius: 50%; 
            object-fit: cover; 
            margin-bottom: 20px; 
        }
        .profile-container {
            text-align: center; 
        }

        .btn-detail {
            margin-top: 10px;
            
        }


        /* Gaya untuk musik */
        .music-section {
            padding: 40px 0;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8);
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
<body>

<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
    <a class="navbar-brand" href="#">
                <img src="gambar/logo.png" alt="#" style="width: 40px; height: auto;">
            </a>
        <a class="navbar-brand" href="#">PPLG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="navbar2.php"><i class="bi bi-house-door"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="berita.php">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tambahberita.php">TambahBerita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
            </ul>
            <!-- Menu login -->
            <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
                    </li>
                </ul>
        </div>
    </div>
</nav>

 <!-- Header -->
  <header class="text-center">
        <div class="container">
            <div class="container col-sm-4 col-lg-8 col-md-6">
            <img src="gambar/logo.png" class="container side-img left-img" alt="Gambar Kiri"> 
                <img src="gambar/cs.jpeg" alt="Gambar" class="header-img">
                <img src="gambar/images.jpg" class="container side-img right-img" alt="Gambar Kanan">
            </div>
            <div class="container col-sm-12 col-lg-4 col-md-6">
            <h3 class="fst-italic">Selamat datang! Ayo berkolaborasi dan </h3>
            <h3 class="fst-italic">menciptakan sesuatu yang hebat </h3>

    <!--<h3 class="fst-italic">Temukan berbagai musik menarik di sini!</h3>
    <h4 class="fst-italic">Agar pengalaman lebih asik, jelajahi sekarang!</h4>-->
                <!--<ul class="list-group">
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
                </ul> -->
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
                        <strong class="fst-italic">Posisi:</strong> Web Developer <br>
                        <strong class="fst-italic">Lokasi:</strong> Jakarta, Indonesia <br>
                        <strong class="fst-italic">Email:</strong> email1@example.com
                    </p>
                    <a href="detailkami1.php" class="btn btn-outline-secondary">Detail</a>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="profile-container">
                    <img src="gambar/iip.jpeg" class="profile-img" alt="Foto Profil 2" />
                    <h2>Afifi Abdul Hadi</h2>
                    <p>
                        <strong class="fst-italic">Posisi:</strong> UI/UX Designer <br>
                        <strong class="fst-italic">Lokasi:</strong> Bandung, Indonesia <br>
                        <strong class="fst-italic">Email:</strong> email2@example.com
                    </p>
                    <a href="detailkami22.php" class="btn btn-outline-secondary">Detail</a> 
                </div>
            </div>
        </div>
    </div>
    
    <h3 class="fst-italic display-3 text-center">Berita</h3>
    <div class="container md-5">
    <div class="row">

      <!-- Berita 1 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="gambar/banjir.jpg" class="card-img-top news-img rounded mx-auto d-block" alt="Gambar Banjir">
          <div class="card-body">
            <h5 class="news-title">Banjir Melanda Pangkalpinang</h5>
            <p class="news-body" style="width: 350px;">Hujan deras selama tiga hari berturut-turut menyebabkan banjir besar di daerah Pangkalpinang...</p>
            <a href="detailberita1.php" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

      <!-- Berita 2 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="gambar/dpr.jpeg" class="card-img-top news-img rounded mx-auto d-block" alt="Gambar DPR">
          <div class="card-body">
            <h5 class="news-title">Anggota DPR Tertangkap Korupsi</h5>
            <p class="news-body"  style="width: 300px;">Seorang anggota DPR ditangkap oleh KPK atas dugaan kasus korupsi proyek infrastruktur...</p>
            <a href="detailberita2.php" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

      <!-- Berita 3 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="gambar/kec.jpeg" class="card-img-top news-img rounded mx-auto d-block " alt="Gambar Kecelakaan">
          <div class="card-body">
            <h5 class="news-title">Kecelakaan di Jalan Tol</h5>
            <p class="news-body" style="width: 310px;">Sebuah kecelakaan melibatkan mobil pribadi di jalan tol menyebabkan arus lalu lintas tersendat...</p>
            <a href="detailberita3.php" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

    </div>

    <div class="row">

      <!-- Berita 4 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="gambar/prabowo.jpg" class="card-img-top news-img rounded mx-auto d-block" alt="Gambar Prabowo">
          <div class="card-body">
            <h5 class="news-title">Prabowo dalam Perjalanan Politik</h5>
            <p class="news-body"  style="width: 300px;">Prabowo Subianto kembali mencalonkan diri sebagai presiden dengan dukungan dari berbagai partai...</p>
            <a href="detailberita4.php" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

      <!-- Berita 5 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="gambar/kebakaranhutan.jpg" class="card-img-top news-img rounded mx-auto d-block" alt="Gambar Kebakaran Hutan">
          <div class="card-body">
            <h5 class="news-title">Kebakaran Hutan Meluas</h5>
            <p class="news-body" style="width: 300px;">Kebakaran hutan yang terjadi di wilayah Sumatera semakin meluas dan mengakibatkan kerusakan lingkungan...</p>
            <a href="detailberita5.php" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

      <!-- Berita 6 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="gambar/tauran.jpg" class="card-img-top news-img rounded mx-auto d-block" alt="Gambar Tauran">
          <div class="card-body">
            <h5 class="news-title">Tauran di Jakarta</h5>
            <p class="news-body"  style="width: 300px;">Sejumlah remaja tertangkap usai terlibat dalam aksi tawuran dngan kelopok lain di pusat kota Jakarta...</p>
            <a href="detailberita6.php" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>

    </div>
  </div>



    <footer>
        <p> 2024 lubuksikaping. kanawk.</p>
    </footer>


<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    window.onscroll = function() {
        const navbar = document.getElementById('navbar');
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    };
</script>

</body>
</html>
