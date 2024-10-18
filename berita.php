<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Berita</title>
  <link rel="stylesheet" href="styles.css">
<style>
  footer {
  background: #ffffff; /* Warna abu-abu */
  color: #6c757d; /* Ubah warna teks ke putih untuk kontras yang lebih baik */
  text-align: center !important;
  padding: 10px !important;
  position: relative !important;
  bottom: 0 !important;
  width: 100% !important;
}
</style>
</head>
<body>
<h1><center>Berita</center></h1>
  <!-- Container for news articles -->
  <div class="container">
    <div class="row">

      <!-- Berita 1 -->
      <div class="col g-col-4">
        <img src="gambar/banjir.jpg" class="news-img" alt="Gambar Banjir">
        <h5 class="news-title">Banjir Melanda Pangkalpinang</h5>
        <p class="news-body">Hujan deras selama tiga hari berturut-turut menyebabkan banjir besar di daerah Pangkalpinang...</p>
        <a href="detailberita1.php" class="btn">Baca Selengkapnya</a>
      </div>

      <!-- Berita 2 -->
      <div class="col g-col-4">
        <img src="gambar/dpr.jpeg" class="news-img" alt="Gambar DPR">
        <h5 class="news-title">Anggota DPR Tertangkap Korupsi</h5>
        <p class="news-body">Seorang anggota DPR ditangkap oleh KPK atas dugaan kasus korupsi proyek infrastruktur...</p>
        <a href="detailberita2.php" class="btn">Baca Selengkapnya</a>
      </div>

      <!-- Berita 3 -->
      <div class="col g-col-4">
      <img src="gambar/kec.jpeg" class="news-img" alt="">
        <h5 class="news-title">Kecelakaan di Jalan Tol</h5>
        <p class="news-body">Sebuah kecelakaan melibatkan mobil pribadi di jalan tol menyebabkan arus lalu lintas tersendat...</p>
        <a href="detailberita3.php" class="btn">Baca Selengkapnya</a>
      </div>

    </div>

    <div class="row">

      <!-- Berita 4 -->
      <div class="col g-col-4">
      <img src="gambar/prabowo.jpg" class="news-img" alt="">
        <h5 class="news-title">Prabowo dalam Perjalanan Politik</h5>
        <p class="news-body">Prabowo Subianto kembali mencalonkan diri sebagai presiden dengan dukungan dari berbagai partai...</p>
        <a href="detailberita4.php" class="btn">Baca Selengkapnya</a>
      </div>

      <!-- Berita 5 -->
      <div class="col g-col-4">
        <img src="gambar/kebakaranhutan.jpg" class="news-img" alt="Gambar Kebakaran Hutan">
        <h5 class="news-title">Kebakaran Hutan Meluas</h5>
        <p class="news-body">Kebakaran hutan yang terjadi di wilayah Sumatera semakin meluas dan mengakibatkan kerusakan lingkungan...</p>
        <a href="detailberita5.php" class="btn">Baca Selengkapnya</a>
      </div>

      <!-- Berita 6 -->
      <div class="col g-col-4">
        <img src="gambar/tauran.jpg" class="news-img" alt="Gambar Tauran">
        <h5 class="news-title">Tauran di Jakarta</h5>
        <p class="news-body">Sejumlah remaja tertangkap usai terlibat dalam aksi tawuran di pusat kota Jakarta...</p>
        <a href="detailberita6.php" class="btn">Baca Selengkapnya</a>
      </div>
    </div>
  </div>
<!--footer-->
<footer>
  <p>&copy; 2024 Portal Berita Terkini. All Rights Reserved.</p>
</footer>


</body>
</html>
