<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Latar belakang putih */
            height: 100vh; /* Mengatur tinggi tampilan */
            display: flex;
            justify-content: center;
            align-items: center; /* Menjaga form di tengah halaman */
        }

        .registration-form {
            max-width: 500px; /* Memperbesar lebar form */
            width: 100%; /* Memastikan lebar penuh pada perangkat kecil */
            padding: 30px; /* Menambah padding pada form */
            background-color: white; /* Warna latar belakang form putih */
            border-radius: 10px; /* Membuat sudut lebih melengkung */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); /* Menguatkan bayangan */
            text-align: center;
        }

        .registration-form h2 {
            margin-bottom: 30px; /* Menambah jarak bawah */
            color: #343a40; /* Warna teks gelap */
            font-size: 28px; /* Memperbesar ukuran font judul */
        }

        .registration-form a {
            color: #007bff; /* Warna tautan biru */
            font-size: 16px; /* Memperbesar ukuran font tautan */
        }

        .registration-form input {
            font-size: 18px; /* Memperbesar ukuran font input */
            padding: 10px; /* Menambah padding pada input */
        }

        .btn-register {
            background-color: white; /* Warna tombol biru */
            color: black; /* Teks tombol putih */
            font-size: 18px; /* Memperbesar ukuran font tombol */
            padding: 12px; /* Menambah padding pada tombol */
        }

        .btn-register:hover {
            background-color: #000; /* Warna tombol biru lebih gelap saat hover */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="registration-form">
            <div class="mb-4">
                <i class="fas fa-user-circle fa-5x text-primary"></i> <!-- Memperbesar ikon -->
            </div>
            <h2>Registrasi</h2>
            <form>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Nama" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Re-Password" required>
                </div>
            </form>
            <p type="submit" class="btn btn-register btn-block"><a href="navbar2.php">REGISTER</></a></p>
            <p class="mt-3"><a href="login.php">Kembali ke Login</a></p>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.min.js"></script>
</body>

</html>
