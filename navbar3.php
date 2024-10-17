<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .profile-img {
        margin-bottom: 50px; /* Jarak antara foto dan teks */
    }
</style>
<body>
    <div class="container mt-5">
        <table class="table">
            <tbody>
                <tr>
                    <!-- Kolom Foto (Sebelah Kiri) -->
                    <td class="align-middle text-center" style="width: 30%;">
                        <img src="gambar/wakduo.jpeg" class=" img-fluid" class="img-fluid w-200" alt="Foto Profil" />
                    </td>
                    <!-- Kolom Teks (Sebelah Kanan) -->
                    <td class="align-middle" style="width: 70%;">
                        <h2>Nama Pengguna</h2>
                        <p>
                            <strong>Posisi:</strong> Web Developer <br>
                            <strong>Lokasi:</strong> Jakarta, Indonesia <br>
                            <strong>Email:</strong> email@example.com
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent convallis nisi ut lacus tempor varius. Curabitur ut lacus a odio sodales feugiat. Vivamus vel vehicula ligula, sit amet consequat nisl. Nam scelerisque ullamcorper diam, sit amet interdum mi.
                        </p>
                        <p>
                            <strong>Keterampilan:</strong>
                            <ul>
                                <li>HTML, CSS, dan JavaScript</li>
                                <li>Framework: Laravel, Bootstrap</li>
                                <li>Pengembangan Frontend & Backend</li>
                            </ul>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

<body>
<style>
        .profile-img {
            width: 250px; /* Ukuran gambar */
            height: 250px; /* Ukuran gambar */
            border-radius: 50%; /* Membuat gambar bulat */
            object-fit: cover; /* Menghindari distorsi gambar */
            margin-bottom: 20px; /* Jarak antara foto dan teks */
        }
        .profile-container {
            text-align: center; /* Pusatkan teks */
        }
    </style>
    <div class="container mt-5 mb-10">
        <h1 class="text-center mb-5">Tentang Kami</h1>

        <div class="row">
            <!-- Profil Pertama (Sebelah Kiri) -->
            <div class="col-md-6 mb-4">
                <div class="profile-container">
                    <img src="gambar/wiki.jpeg" class="profile-img" alt="Foto Profil 1" />
                    <h2>Nama Pengguna 1</h2>
                    <p>
                        <strong>Posisi:</strong> Web Developer <br>
                        <strong>Lokasi:</strong> Jakarta, Indonesia <br>
                        <strong>Email:</strong> email1@example.com
                    </p>
                </div>
            </div>

            <!-- Profil Kedua (Sebelah Kanan) -->
            <div class="col-md-6 mb-4">
                <div class="profile-container">
                    <img src="gambar/iip.jpeg" class="profile-img" alt="Foto Profil 2" />
                    <h2>Nama Pengguna 2</h2>
                    <p>
                        <strong>Posisi:</strong> UI/UX Designer <br>
                        <strong>Lokasi:</strong> Bandung, Indonesia <br>
                        <strong>Email:</strong> email2@example.com
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>