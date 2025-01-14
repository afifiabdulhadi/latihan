<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita: Pangkalpinang Banjir</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                </ul>
                <ul class="navbar-nav">
                    <a class="nav-link" href="reqister.php">Kontak</a>
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
                    <img src="../gambar/banjir.jpg" class="img-thumbnail mx-auto d-block" alt="Gambar"
                        style="width: 80%; max-width: 900px; margin-top: 10px;">
                    <div class="card-body">
                        <h2 class="card-title text-center"> Hujan Deras Melanda Pangkal Pinang
                        </h2>

                        <div class="content-body">
                            <p><strong>Tanggal:</strong> 6 Januari 2022</p>
                            <p>Pangkalpinang, ibu kota Provinsi Bangka Belitung, dilanda banjir pada tanggal 6 Januari
                                2022 akibat hujan deras yang mengakibatkan meluapnya sungai-sungai di sekitar daerah
                                tersebut. Banjir ini menyebabkan sejumlah rumah dan fasilitas umum terendam air.</p>
                            <p>Banjir ini mengakibatkan kerugian material yang cukup besar, dan upaya evakuasi dilakukan
                                oleh pemerintah setempat. Banyak warga yang terpaksa mengungsi dan mencari tempat yang
                                lebih aman. Pemerintah daerah juga memberikan bantuan kepada korban banjir.</p>
                            <p>Untuk informasi lebih lanjut, masyarakat diimbau untuk mengikuti berita terkini melalui
                                media lokal dan resmi.</p>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>