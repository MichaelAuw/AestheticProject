<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Liked History Art</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Card hover effect */
        .artwork-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .artwork-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Ion-icon heart styles */
        ion-icon.active {
            animation: like 0.5s 1;
            fill: red;
            stroke: none;
        }
        ion-icon {
            fill: transparent;
            stroke: black;
            stroke-width: 30;
            transition: all 0.5s;
            font-size: 30px; /* Adjusted size */
        }

        /* Animation for heart */
        @keyframes like {
            0%   { transform: scale(1); }
            90%  { transform: scale(1.2); }
            100% { transform: scale(1.1); }
        }

    </style>
</head>
<body class="bg-gray-100 font-sans antialiased">

<!-- Main Container -->
<section class="bg-white py-8 antialiased md:py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-7xl mx-auto bg-white p-8 rounded-lg shadow-lg">
            <h1 class="text-4xl font-bold text-gray-800 mb-8 border-b border-gray-200 pb-4">🎨 Liked History Art</h1>

            <!-- Liked Artworks List (10 Items) -->
            <div id="liked-artworks" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Liked Artwork Item 1 -->
                <div class="bg-white rounded-lg shadow-lg p-4 artwork-card" data-artwork-id="1">
                    <img src="images/painting2.webp" alt="Artwork Image 1" class="rounded-lg w-full h-48 object-cover">
                    <div class="mt-4">
                        <h3 class="text-lg font-bold text-gray-800">Fantasy World</h3>
                        <p class="text-gray-600 text-sm">Artist: John Doe</p>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <a href="#" class="text-indigo-600 hover:text-indigo-800 transition">View Details</a>
                        <ion-icon name="heart" class="like-btn active" onclick="toggleLike(this, 1)"></ion-icon>
                    </div>
                </div>

                <!-- Liked Artwork Item 2 -->
                <div class="bg-white rounded-lg shadow-lg p-4 artwork-card" data-artwork-id="2">
                    <img src="/images/indianart.webp" alt="Artwork Image 2" class="rounded-lg w-full h-48 object-cover">
                    <div class="mt-4">
                        <h3 class="text-lg font-bold text-gray-800">Mystic Landscape</h3>
                        <p class="text-gray-600 text-sm">Artist: Jane Doe</p>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <a href="#" class="text-indigo-600 hover:text-indigo-800 transition">View Details</a>
                        <ion-icon name="heart" class="like-btn active" onclick="toggleLike(this, 2)"></ion-icon>
                    </div>
                </div>

                <!-- Liked Artwork Item 3 -->
                <div class="bg-white rounded-lg shadow-lg p-4 artwork-card" data-artwork-id="3">
                    <img src="/images/paintingart3.png" alt="Artwork Image 3" class="rounded-lg w-full h-48 object-cover">
                    <div class="mt-4">
                        <h3 class="text-lg font-bold text-gray-800">Urban Street Art</h3>
                        <p class="text-gray-600 text-sm">Artist: Alex B.</p>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <a href="#" class="text-indigo-600 hover:text-indigo-800 transition">View Details</a>
                        <ion-icon name="heart" class="like-btn active" onclick="toggleLike(this, 3)"></ion-icon>
                    </div>
                </div>

                <!-- Liked Artwork Item 4 -->
                <div class="bg-white rounded-lg shadow-lg p-4 artwork-card" data-artwork-id="3">
                    <img src="/images/paintingart4.png" alt="Artwork Image 3" class="rounded-lg w-full h-48 object-cover">
                    <div class="mt-4">
                        <h3 class="text-lg font-bold text-gray-800">Urban Street Art</h3>
                        <p class="text-gray-600 text-sm">Artist: Alex B.</p>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <a href="#" class="text-indigo-600 hover:text-indigo-800 transition">View Details</a>
                        <ion-icon name="heart" class="like-btn active" onclick="toggleLike(this, 3)"></ion-icon>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Toggle heart icon and simulate removing from history
    function toggleLike(icon, artworkId) {
        const artworkCard = document.querySelector(`[data-artwork-id="${artworkId}"]`);
        icon.classList.toggle('active');

        // Simulate unlike by removing the card (in a real app, this would involve an API call)
        if (!icon.classList.contains('active')) {
            setTimeout(() => {
                artworkCard.remove();
            }, 300);  // Delay for visual effect
        }
    }
</script>

</body>
</html>
