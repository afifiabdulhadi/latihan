<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <style>
    .gallery {
      margin: 0.5rem;
      border: 1px solid #ccc;
      display: inline-block;
      width: 180px;
    }

    .gallery:hover {
      border-color: #777;
    }

    .gallery img {
      width: 100%;
      height: auto;
      display: block;
    }

    .desc {
      padding: 1rem;
      text-align: center;
      font-size: 1rem;
    }
  </style>
</head>
<body>

  <div class="gallery">
  <img src="gambar/1.jpg" alt="Pemandangan gunung" width="500" height="300">

    <div class="desc">Cinque Terre coastline</div>
  </div>

  <div class="gallery">
    <a href="img_forest.jpg" target="_blank">
      <img src="img_forest.jpg" alt="Dense forest view">
    </a>
    <div class="desc">Beautiful forest scenery</div>
  </div>

  <div class="gallery">
    <a href="img_lights.jpg" target="_blank">
      <img src="img_lights.jpg" alt="Northern Lights in the sky">
    </a>
    <div class="desc">Northern Lights illumination</div>
  </div>

  <div class="gallery">
    <a href="img_mountains.jpg" target="_blank">
    </a>
    <div class="desc">Majestic mountain view</div>
  </div>

</body>
</html>
