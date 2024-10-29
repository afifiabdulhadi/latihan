<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita</title>
    <!-- Bootstrap CSS -->
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

    <!-- Container for the Detail Page -->
    <div class="container mt-5">
        <button onclick="window.history.back()" type="button" class="btn-close" aria-label="Close"
            style="margin-top: 50px;"></button>
        <div class="row" style="margin-top: 10px;">
            <div class="col-lg">
                <div class="card shadow-lg">
                    <!-- Image for the article -->
                    <img src="../gambar/prabowo.jpg" class="img-thumbnail mx-auto d-block" alt="Gambar"
                        style="width: 80%; max-width: 900px;  margin-top: 10px;">

                    <!-- Body of the article -->
                    <div class="card-body">
                        <h2 class="card-title text-center">Prabowo Subianto dan Perjalanan Politiknya</h2>
                        <p class="author-info text-center">Ditulis oleh: John Doe | 10 Oktober 2024</p>

                        <div class="content-body">
                            <p>
                                Prabowo Subianto merupakan salah satu tokoh penting dalam politik Indonesia. Dengan
                                latar belakang militer yang kuat, Prabowo telah berhasil memposisikan dirinya sebagai
                                salah satu kandidat terkuat dalam pemilihan presiden beberapa kali. Kepemimpinan dan
                                visinya untuk Indonesia selalu menjadi pusat perhatian.
                            </p>
                            <p>
                                Pada tahun ini, Prabowo kembali mencalonkan diri sebagai calon presiden dengan dukungan
                                dari berbagai partai politik besar. Salah satu visi utamanya adalah meningkatkan
                                pertahanan negara, pendidikan nasional, dan meningkatkan ekonomi rakyat kecil.
                            </p>
                            <p>
                                Pada kampanye terakhirnya, Prabowo menekankan pentingnya menjaga kedaulatan negara di
                                tengah ketegangan global. Dia juga berjanji akan memperkuat kerja sama dengan negara
                                tetangga untuk stabilitas kawasan.
                            </p>
                        </div>
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