<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea,
        select,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Tambah Berita</h2>
    <form action="tambah_berita.php" method="POST" enctype="multipart/form-data">
        <label for="judul">Judul Berita:</label>
        <input type="text" name="judul" id="judul" required>

        <label for="konten">Konten Berita:</label>
        <textarea name="konten" id="konten" required></textarea>

        <label for="kategori">Kategori Berita:</label>
        <select name="kategori" id="kategori">
            <option value="teknologi">Teknologi</option>
            <option value="lainnya">Lainnya</option>
        </select>

        <label for="foto">Pilih Foto Berita:</label>
        <input type="file" name="foto" id="foto" required>

        <button type="submit">Tambah Berita</button>
    </form>
</div>

<?php include 'footer.php'; ?> <!-- Footer dimasukkan di sini -->
</body>
</html>



