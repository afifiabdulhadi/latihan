<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .contact-form {
            max-width: 600px;
            margin: 0 auto; /* Center the form */
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container my-5">
    <a href="navbar2.php" class="btn btn-outline-secondary"><</a> 
        <h2 class="text-center mb-4">Hubungi Kami</h2>
        <div class="contact-form">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Nama" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Alamat Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Alamat Email" required>
                </div>
                <div class="mb-3">
                    <label for="company" class="form-label">Perusahaan</label>
                    <input type="text" class="form-control" id="company" placeholder="Perusahaan" required>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Telepon</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Telepon" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Pesan" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Kirim</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
