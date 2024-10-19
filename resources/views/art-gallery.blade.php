<!-- resources/views/art-gallery.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Art Gallery</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Hebrew:wght@700&family=Chivo:wght@400;700&display=swap" rel="stylesheet"/>
  <style>
    body {
      background-color: #000;
      color: #fff;
      font-family: 'Open Sans', sans-serif;
    }

    .gallery-title {
      text-align: center;
      margin-top: 15px;
      font-size: 2rem;
      letter-spacing: 0.05em;
    }

    .gallery-subtitle {
      text-align: center;
      margin-top: 10px;
      font-size: 1rem;
      letter-spacing: 0.01em;
    }

    .gallery {
      display: grid;
      grid-template-columns: repeat(4, 1fr); /* Four columns */
      grid-auto-rows: 200px; /* Set consistent height for rows */
      gap: 15px;
      padding: 40px 20px;
    }

    .gallery-item {
      position: relative;
      overflow: hidden;
      background-color: #222; /* Just a background for empty state */
      border-radius: 10px;
    }

    .gallery-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 10px;
      transition: transform 0.3s ease;
    }

    .gallery-item img:hover {
      transform: scale(1.05);
    }

    .item-1 {
      grid-column: span 2;
      grid-row: span 2;
    }

    .item-2, .item-3, .item-4, .item-6, .item-7 {
      grid-column: span 1;
      grid-row: span 1;
    }

    .item-5 {
      grid-column: span 2;
      grid-row: span 1;
    }
  </style>
</head>
<body>
<!-- Art Gallery Section -->
<div class="gallery-section mt-12">
    <div class="gallery-title">
        Welcome to Art Gallery
    </div>
    <div class="gallery-subtitle text-gray-400">
        ENJOY VARIOUS ART FROM DESIGNERS AROUND THE WORLD
    </div>
    <hr class="border-gray-600 my-8 mx-auto w-1/2"/>

    <!-- Art Gallery Grid -->
    <div class="gallery">
        <!-- Large landscape image spanning 2 columns and 2 rows -->
        <div class="gallery-item item-1">
        <a href="{{ route('art-gallery.show', ['id' => 1]) }}">
        <img src="/images/1.jpg" alt="Landscape Image 1">
        </a>
                <img src="/images/1.jpg" alt="Landscape Image 1">
            </a>
        </div>

        <!-- Small square/portrait images -->
        <div class="gallery-item item-2">
            <a href="{{ route('art-gallery.show', ['id' => 2]) }}">
                <img src="/images/2.jpg" alt="Portrait Image 2">
            </a>
        </div>
        <div class="gallery-item item-3">
            <a href="{{ route('art-gallery.show', ['id' => 3]) }}">
                <img src="/images/3.jpg" alt="Portrait Image 3">
            </a>
        </div>
        <div class="gallery-item item-4">
            <a href="{{ route('art-gallery.show', ['id' => 4]) }}">
                <img src="/images/indianart.webp" alt="Portrait Image 4">
            </a>
        </div>
        <div class="gallery-item item-4">
            <a href="/images/paintingart3.png">
                <img src="/images/paintingart3.png" alt="Portrait Image 4">
                </a>
        </div>
        <!-- Add more images as per your gallery collection -->
                <!-- Landscape image spanning 2 columns -->
                <div class="gallery-item item-5">
            <a href="/images/5.jpg">
                <img src="/images/5.jpg" alt="Landscape Image 5">
            </a>
        </div>

        <div class="gallery-item item-6">
            <a href="/images/6.jpg">
                <img src="/images/6.jpg" alt="Portrait Image 6">
            </a>
        </div>
        <div class="gallery-item item-7">
            <a href="/images/7.jpg">
                <img src="/images/7.jpg" alt="Portrait Image 7">
            </a>
        </div>

        <div class="gallery-item item-8">
            <a href="/images/melody.webp">
                <img src="/images/melody.webp" alt="Portrait Image 8">
            </a>
        </div>

        <div class="gallery-item item-2">
            <a href="/images/2.jpg">
                <img src="/images/2.jpg" alt="Portrait Image 2">
            </a>
        </div>
        <div class="gallery-item item-3">
            <a href="/images/3.jpg">
                <img src="/images/3.jpg" alt="Portrait Image 3">
            </a>
        </div>

        <div class="gallery-item item-4">
            <a href="/images/paintingart4.png">
                <img src="/images/paintingart4.png" alt="Portrait Image 4">
            </a>
        </div>
    </div>
</div>

</body>
</html>