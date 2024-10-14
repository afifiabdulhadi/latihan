<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .content {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container content">
    <h1 class="text-center">Tambah Berita</h1>
    <form action="proses_tambah_berita.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="judul">Judul Berita:</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>

        <div class="form-group">
            <label for="gambar">Gambar Berita:</label>
            <input type="file" class="form-control-file" id="gambar" name="gambar" accept="image/*" required>
        </div>

        <div class="form-group">
            <label for="tanggal">Tanggal Berita:</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi Berita:</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Simpan Berita</button>
    </form>

    <div class="text-center mt-4">
        <a href="berita.php" class="btn btn-secondary">Kembali ke Berita</a>
    </div>
    <?php include 'footer.php'; ?> <!-- Footer dimasukkan di sini -->
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
