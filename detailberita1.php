<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Berita: Pangkalpinang Banjir</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>
<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top"  style="background-color: gray;!important">
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





  <div class="container mt-5">
  <a href="navbar2.php" class="btn btn-outline-secondary"><</a>
    <div class="row">
      <div class="col-lg ">
        <div class="card">
          <img src="gambar/banjir.jpg" class="img-thumbnail rounded mx-auto d-block" style="width: 900px;" alt="Banjir di Pangkalpinang">
          <div class="card-body">
            <h2 class="card-title text-center"> Hujan Deras Melanda Pangkal Pinang
            </h2>

            <div class="content-body">
            <p><strong>Tanggal:</strong> 6 Januari 2022</p>
            <p>Pangkalpinang, ibu kota Provinsi Bangka Belitung, dilanda banjir pada tanggal 6 Januari 2022 akibat hujan deras yang mengakibatkan meluapnya sungai-sungai di sekitar daerah tersebut. Banjir ini menyebabkan sejumlah rumah dan fasilitas umum terendam air.</p>
            <p>Banjir ini mengakibatkan kerugian material yang cukup besar, dan upaya evakuasi dilakukan oleh pemerintah setempat. Banyak warga yang terpaksa mengungsi dan mencari tempat yang lebih aman. Pemerintah daerah juga memberikan bantuan kepada korban banjir.</p>
            <p>Untuk informasi lebih lanjut, masyarakat diimbau untuk mengikuti berita terkini melalui media lokal dan resmi.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>
</html>

