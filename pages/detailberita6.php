<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita Tauran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../gambar/logo.png" alt="#" style="width: 40px; height: auto;">
            </a>
            <a class="navbar-brand" href="#">PPLG</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="berita.php">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak.php">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container mt-5">
        <button onclick="window.history.back()" type="button" class="btn-close" aria-label="Close"
            style="margin-top: 50px;"></button>
        <div class="row" style="margin-top: 10px;">
            <div class="col-lg ">
                <div class="card shadow-lg">
                    <img src="../gambar/tauran.jpg" class="img-thumbnail mx-auto d-block" alt="Gambar"
                        style="width: 80%; max-width: 900px;  margin-top: 10px;">

                    <div class="card-body">
                        <h2 class="card-title text-center"> Sekelompok Remaja Tawuran</h2>
                        <p class="text-muted text-center">Ditulis pada: 10 Oktober 2024</p>

                        <div class="content-body">
                            <p><strong>Tanggal:</strong> 11 Oktober 2024</p>
                            <p>Pada tanggal 11 Oktober 2024, sekelompok remaja terlibat tawuran di kawasan Jakarta.
                                Kejadian ini mengakibatkan beberapa orang terluka dan kerusakan pada fasilitas umum.
                                Tawuran dipicu oleh perselisihan antar kelompok remaja yang berlangsung di tengah jalan
                                raya.</p>
                            <p>Polisi yang menerima laporan segera menuju lokasi untuk mengendalikan situasi dan
                                mencegah tawuran lebih lanjut. Beberapa pelaku tawuran berhasil ditangkap dan diambil
                                tindakan oleh pihak kepolisian.</p>
                            <p>Pihak berwenang mengimbau masyarakat untuk tidak terlibat dalam tindakan kekerasan dan
                                menyarankan agar orang tua lebih memperhatikan pergaulan anak-anak mereka untuk mencegah
                                insiden serupa di masa depan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>