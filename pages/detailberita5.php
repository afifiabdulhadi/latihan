<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita Kebakaran Hutan</title>
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
            <div class="col-lg">
                <div class="card shadow-lg">
                    <!-- Image for the article -->
                    <img src="../gambar/kebakaranhutan.jpg" class="img-thumbnail mx-auto d-block" alt="Gambar"
                        style="width: 80%; max-width: 900px;  margin-top: 10px;">

                    <!-- Body of the article -->
                    <div class="card-body">
                        <h2 class="card-title text-center"> Kebakaran hutan</h2>
                        <p class="author-info text-center">Ditulis pada: 10 Oktober 2024</p>

                        <div class="content-body">
                            <p>
                                Kebakaran hutan yang terjadi di wilayah Sumatera pada tanggal 11 Oktober 2024 telah
                                mengakibatkan kerusakan yang parah. Api mulai melahap area hutan yang kaya akan
                                keanekaragaman hayati, mengancam habitat berbagai spesies yang terancam punah.
                            </p>
                            <p>
                                Pihak berwenang telah mengerahkan tim pemadam kebakaran untuk memadamkan api, namun
                                cuaca yang kering dan angin kencang mempersulit upaya tersebut. Selain itu, asap dari
                                kebakaran ini telah menyebar ke daerah pemukiman, menyebabkan dampak kesehatan bagi
                                warga setempat.
                            </p>
                            <p>
                                Pemerintah menghimbau masyarakat untuk waspada dan menghindari pembakaran lahan serta
                                melaporkan jika melihat kebakaran untuk mencegah penyebaran lebih lanjut.
                            </p>
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