<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #000; /* Latar belakang kuning */
            height: 100vh; /* Mengatur tinggi tampilan */
            display: flex;
            justify-content: center;
            align-items: center; /* Menjaga form di tengah halaman */
        }
        .registration-form {
            max-width: 400px;
            width: 100%; /* Memastikan lebar penuh pada perangkat kecil */
            padding: 20px;
            background-color: green;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        .registration-form h2 {
            margin-bottom: 20px;
        }
        .registration-form input {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="registration-form">
        <div class="mb-4">
            <i class="fas fa-user-circle fa-3x"></i>
        </div>
        <h2>Registrasi</h2>
        <form>
            <input type="text" class="form-control" placeholder="Nama" required>
            <input type="text" class="form-control" placeholder="Username" required>
            <input type="password" class="form-control" placeholder="Password" required>
            <input type="password" class="form-control" placeholder="Re-Password" required>
            <button type="submit" class="btn btn-primary btn-block">REGISTER</button>
        </form>
        <p class="mt-3"><a href="#">Kembali ke Login</a></p>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
