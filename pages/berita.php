<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Berita</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>
<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top"  style="background-color: gray;!important">
    <div class="container">
    <a class="navbar-brand" href="#">
                <img src="../gambar/logo.png" alt="#" style="width: 40px; height: auto;">
            </a>
        <a class="navbar-brand" href="#">PPLG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="navbar2.php"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tambahberita.php"></a>
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



<h1 class="display-3 text-center" style="margin-top: 50px;">Berita</h1>

  <!-- Container for news articles -->
  <div class="container md-5">
    <div class="row">

      <!-- Berita 1 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../gambar/banjir.jpg" class="card-img-top news-img rounded mx-auto d-block" alt="Gambar Banjir">
          <div class="card-body">
            <h5 class="news-title">Banjir Melanda Pangkalpinang</h5>
            <p class="news-body" style="width: 350px;">Hujan deras selama tiga hari berturut-turut menyebabkan banjir besar di daerah Pangkalpinang...</p>
            <a href="detailberita1.php" class="btn btn-outline-secondary">Detail</a>
          </div>
        </div>
      </div>

      <!-- Berita 2 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../gambar/korup.jpg" class="card-img-top news-img rounded mx-auto d-block"  alt="Gambar DPR">
          <div class="card-body">
            <h5 class="news-title">Anggota DPR Tertangkap Korupsi</h5>
            <p class="news-body"  style="width: 300px;">Seorang anggota DPR ditangkap oleh KPK atas dugaan kasus korupsi proyek infrastruktur...</p>
            <a href="detailberita2.php" class="btn btn-outline-secondary">Detail</a>
          </div>
        </div>
      </div>

      <!-- Berita 3 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../gambar/kec.jpeg" class="card-img-top news-img rounded mx-auto d-block " alt="Gambar Kecelakaan">
          <div class="card-body">
            <h5 class="news-title">Kecelakaan di Jalan Tol</h5>
            <p class="news-body" style="width: 310px;">Sebuah kecelakaan melibatkan mobil pribadi di jalan tol menyebabkan arus lalu lintas tersendat...</p>
            <a href="detailberita3.php" class="btn btn-outline-secondary">Detail</a>
          </div>
        </div>
      </div>

    </div>

    <div class="row">

      <!-- Berita 4 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../gambar/prabowo.jpg" class="card-img-top news-img rounded mx-auto d-block" alt="Gambar Prabowo">
          <div class="card-body">
            <h5 class="news-title">Prabowo dalam Perjalanan Politik</h5>
            <p class="news-body"  style="width: 300px;">Prabowo Subianto kembali mencalonkan diri sebagai presiden dengan dukungan dari berbagai partai...</p>
            <a href="detailberita4.php" class="btn btn-outline-secondary">Detail</a>
          </div>
        </div>
      </div>

      <!-- Berita 5 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../gambar/kebakaranhutan.jpg" class="card-img-top news-img rounded mx-auto d-block" alt="Gambar Kebakaran Hutan">
          <div class="card-body">
            <h5 class="news-title">Kebakaran Hutan Meluas</h5>
            <p class="news-body" style="width: 300px;">Kebakaran hutan yang terjadi di wilayah Sumatera semakin meluas dan mengakibatkan kerusakan lingkungan...</p>
            <a href="detailberita5.php" class="btn btn-outline-secondary">Detail</a>
          </div>
        </div>
      </div>

      <!-- Berita 6 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="../gambar/tauran.jpg" class="card-img-top news-img rounded mx-auto d-block" alt="Gambar Tauran">
          <div class="card-body">
            <h5 class="news-title">Tauran di Jakarta</h5>
            <p class="news-body"  style="width: 300px;">Sejumlah remaja tertangkap usai terlibat dalam aksi tawuran dngan kelopok lain di pusat kota Jakarta...</p>
            <a href="detailberita6.php" class="btn btn-outline-secondary">Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS (Optional) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
