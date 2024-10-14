<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berita</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .gallery-img {
      height: 100px;
      object-fit: cover; 
    }
  </style>
</head>
<body>
  <h1><center>BERITA</center></h1>

  <div class="container mt-5">
    <div class="row">
      <!-- Gallery item 1 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="gambar/banjir.jpg" class="card-img-top gallery-img" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <p class="card-text text-center">Pangkalpinang Banjir</p>
          </div>
          <a href="detailberita1.php" class="btn btn-primary">Detail</a> <!-- Button for Detail -->
        </div>
      </div>

      <!-- Gallery item 2 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <a href="gambar/dpr.jpeg" target="_blank">
            <img src="gambar/dpr.jpeg" class="card-img-top gallery-img" style="height: 200px; object-fit: cover;">
          </a>
          <div class="card-body">
            <p class="card-text text-center">Anggota DPR Tertangkap Korupsi</p>
          </div>
          <a href="detailberita2.php" class="btn btn-primary">Detail</a> <!-- Button for Detail -->
        </div>
      </div>

      <!-- Gallery item 3 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <a href="gambar/kec.jpeg" target="_blank">
            <img src="gambar/kec.jpeg" class="card-img-top gallery-img"  style="height: 200px; object-fit: cover;">
          </a>
          <div class="card-body">
            <p class="card-text text-center">Sebuah Mobil Pribadi Kecelakaan Di Jalan Tol</p>
          </div>
          <a href="detailberita3.php" class="btn btn-primary">Detail</a> <!-- Button for Detail -->
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <!-- Gallery item 4 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="gambar/p.jpeg" class="card-img-top gallery-img" alt="Gambar Prabowo" style="height: 200px; object-fit: cover;">
          <div class="card-body">
            <p class="card-text text-center">Prabowo</p>
          </div>
          <a href="detailberita4.php" class="btn btn-primary">DETAIL</a>
        </div>
      </div>

      <!-- Gallery item 5 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <a href="gambar/k.jpeg" target="_blank">
            <img src="gambar/k.jpeg" class="card-img-top gallery-img" style="height: 200px; object-fit: cover;">
          </a>
          <div class="card-body">
            <p class="card-text text-center">Kebakaran hutan</p>
          </div>
          <a href="detailberita5.php" class="btn btn-primary">DETAIL</a>
        </div>
      </div>

      <!-- Gallery item 6 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <a href="gambar/t.jpeg" target="_blank">
            <img src="gambar/t.jpeg" class="card-img-top gallery-img"  style="height: 200px; object-fit: cover;">
          </a>
          <div class="card-body">
            <p class="card-text text-center">Salaseorang Remaja Tertangkap Usai Tauran</p>
            
          </div>
          <a href="detailberita6.php" class="btn btn-primary">DETAIL</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (opsional) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
