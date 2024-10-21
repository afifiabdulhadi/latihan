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
            max-width: 500px; 
            width: 100%;
            padding: 30px; 
            background-color: darkgray; 
            border-radius: 10px; 
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); 
            text-align: center;
        }

        .registration-form h2 {
            margin-bottom: 30px; /* Menambah jarak bawah */
            color: black; /* Warna teks gelap */
            font-size: 28px; /* Memperbesar ukuran font judul */
        }

        .registration-form a {
            color: black; 
            font-size: 16px; 
        }

        .registration-form input {
            font-size: 18px;
            padding: 10px; 
        }

        .btn-register {
            background-color: white; 
            color: white; 
            font-size: 18px;
            padding: 12px; 
        }

        .btn-register:hover {
            background-color: black; 
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
            <p class="mt-3"><a href="navbar2.php">REGISTER</a></p>
            <p class="mt-3"><a href="login.php">Kembali ke Login</a></p>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.min.js"></script>
</body>

</html>
