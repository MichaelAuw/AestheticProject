<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $artwork['title'] }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Roboto', sans-serif; /* Updated to Roboto */
            background-color: #f7f8fa;
            color: #333;
        }
        .btn {
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: scale(1.05);
            background-color: #4c1d95;
            color: #fff;
        }

        .carousel-button:hover {
            background-color: #6b7280;
        }

        .image-thumbnail:hover {
            transform: scale(1.1);
        }

        .share-icons i:hover {
            transform: scale(1.2);
            color: #4c1d95;
        }

        .card:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">
    <!-- Navbar -->
    @include('layouts.navbar')

    <!-- Main Content -->
    <div class="max-w-6xl mx-auto p-4">
        <!-- Breadcrumb Navigation -->
        <nav class="flex items-center space-x-2 text-sm text-gray-500 mb-4">
            <a href="/" class="hover:underline">home</a>
            <span>/</span>
            <a href="/category" class="hover:underline">{{ $artwork['category'] }}</a>
            <span>/</span>
            <span class="text-gray-800">{{ $artwork['title'] }}</span>
        </nav>

        <!-- Artwork Details -->
        <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0" x-data="{ currentImage: 1 }">
            <!-- Artwork Image and Thumbnails -->
            <div class="lg:w-2/3">
                <img src="{{ asset('images/' . $artwork['image']) }}" alt="{{ $artwork['title'] }}"
                    class="w-full h-auto object-cover mb-4 lg:mb-0 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300" />

                <!-- Thumbnail Gallery -->
                <div class="flex space-x-2 justify-center mt-4">
                    <button class="carousel-button p-2 bg-gray-200 rounded-full hover:bg-gray-300 transition-all"
                        @click="currentImage = currentImage === 1 ? 4 : currentImage - 1">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <div class="flex space-x-2">
                        <template x-for="n in 4">
                            <img :src="'https://placehold.co/100x100?text=Thumb' + n"
                                alt="Thumbnail"
                                class="image-thumbnail w-16 h-16 rounded-lg border hover:scale-105 transition-transform cursor-pointer" />
                        </template>
                    </div>
                    <button class="carousel-button p-2 bg-gray-200 rounded-full hover:bg-gray-300 transition-all"
                        @click="currentImage = currentImage === 4 ? 1 : currentImage + 1">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            <!-- Artwork Info Section -->
            <div class="lg:w-1/3 lg:pl-8 space-y-4">
                <!-- Artist Info -->
                <div class="flex items-center mb-4">
                    <img src="https://placehold.co/50x50" alt="{{ $artwork['artist'] }}"
                        class="w-10 h-10 rounded-full mr-2" />
                    <div>
                        <span class="text-sm text-gray-500">{{ $artwork['artist'] }}</span>
                    </div>
                </div>

                <!-- Artwork Title and Medium -->
                <h2 class="text-2xl font-bold text-black-700">{{ $artwork['title'] }}</h2>
                <div class="flex items-center space-x-2 mb-4">
                    <span class="text-sm text-gray-500">{{ $artwork['medium'] }}</span>
                    <span class="text-sm text-gray-500">•</span>
                    <button class="text-sm text-indigo-500 hover:underline">+ More details</button>
                </div>

                <!-- Price and Actions -->
                <div class="text-4xl font-bold text-gray-900 mb-4">{{ $artwork['price'] }}</div>
                <button
                    class="bg-indigo-500 text-white py-2 px-4 rounded-lg w-full mb-4 hover:bg-indigo-600 transition-all btn">
                    BUY NOW
                </button>
                <button
                    class="border border-indigo-500 text-indigo-500 py-2 px-4 rounded-lg w-full mb-4 hover:bg-indigo-50 transition-all btn"
                    @click="alert('Contacting artist...')">
                    CONTACT {{ strtoupper($artwork['artist']) }}
                </button>
                <button
                    class="flex items-center justify-center space-x-2 text-gray-500 hover:text-indigo-500 transition-all btn"
                    @click="alert('Item added to cart!')">
                    <img src="/images/shopping-cart.svg" alt="Shopping Cart" class="w-5 h-5">
                    <span>Add to Cart</span>
                </button>

                <!-- Share and Report -->
                <div class="border-t border-gray-300 pt-4 mt-6">
                    <h3 class="text-lg font-bold mb-2">Share</h3>
                    <div class="flex space-x-4 share-icons">
                        <i class="fab fa-facebook-f text-gray-500 hover:text-blue-600 cursor-pointer"></i>
                        <i class="fab fa-twitter text-gray-500 hover:text-blue-400 cursor-pointer"></i>
                        <i class="fab fa-pinterest text-gray-500 hover:text-red-600 cursor-pointer"></i>
                        <i class="fab fa-instagram text-gray-500 hover:text-pink-500 cursor-pointer"></i>
                    </div>
                    <button class="text-gray-500 text-sm mt-4 hover:underline">Report a problem</button>
                </div>
            </div>
        </div>

        <!-- Description Section -->
        <div class="mt-8">
            <h3 class="text-xl font-bold mb-2">Description</h3>
            <p class="text-gray-700 mb-4">{{ $artwork['description'] }}</p>

            <!-- Artwork Additional Info -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-ruler-combined text-gray-500"></i>
                    <div>
                        <h4 class="text-sm font-bold">Dimensions</h4>
                        <p class="text-sm text-gray-500">{{ $artwork['dimensions'] }}</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-palette text-gray-500"></i>
                    <div>
                        <h4 class="text-sm font-bold">Style</h4>
                        <p class="text-sm text-gray-500">{{ $artwork['style'] }}</p>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <i class="fas fa-users text-gray-500"></i>
                    <div>
                        <h4 class="text-sm font-bold">Subject</h4>
                        <p class="text-sm text-gray-500">{{ $artwork['subject'] }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Other Listings Section -->
        <div class="max-w-7xl mx-auto py-12 mt-12">
            <div class="text-center">
                <img alt="Profile picture of Ruslana Levandovska" class="rounded-full mx-auto mb-4" height="50"
                    src="https://storage.googleapis.com/a1aa/image/rDj0sQ4efjph6kC62n60n8eeiWc0wKvJvDwv9fiqG3VokCYcC.jpg"
                    width="50" />
                <h2 class="text-xl font-medium">
                    Other listings from Ruslana Levandovska
                </h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mt-8">
                <div class="text-center">
                    <div class="relative">
                        <img alt="Painting of a woman floating on a pink inflatable ring in a pool"
                            class="w-full h-auto" height="200"
                            src="https://storage.googleapis.com/a1aa/image/SRST1E7aaGIQDhYXyEwvVWVeWIm3pvJOe7gR5k3IfqBGpAGnA.jpg"
                            width="300" />
                        <div class="absolute bottom-0 left-0 bg-gray-800 text-white text-sm px-2 py-1">
                            £4,600.00
                        </div>
                    </div>
                    <h3 class="mt-4 text-lg font-medium">Sun Kissed Dreams</h3>
                    <p class="text-gray-600">Ruslana Levandovska</p>
                    <p class="text-gray-600">Oil</p>
                </div>
                <div class="text-center">
                    <div class="relative">
                        <img alt="Painting of a woman in a hat sitting by a pool" class="w-full h-auto" height="200"
                            src="https://storage.googleapis.com/a1aa/image/YlH2tYHKJM7hGZJMHBXfV8VbWbX9OkcauycA8scB6gMUKgxJA.jpg"
                            width="300" />
                        <div class="absolute bottom-0 left-0 bg-gray-800 text-white text-sm px-2 py-1">
                            £3,390.00
                        </div>
                    </div>
                    <h3 class="mt-4 text-lg font-medium">Ocean Daydreaming</h3>
                    <p class="text-gray-600">Ruslana Levandovska</p>
                    <p class="text-gray-600">Oil</p>
                </div>
                <div class="text-center">
                    <div class="relative">
                        <img alt="Painting of a pool with a sunset in the background" class="w-full h-auto" height="200"
                            src="https://storage.googleapis.com/a1aa/image/jNkgYgmmF7rxIZ3Ubh3nO9NMt2DWbAOt4DbdGAsF5QBJFw4E.jpg"
                            width="300" />
                        <div class="absolute bottom-0 left-0 bg-gray-800 text-white text-sm px-2 py-1">
                            £4,600.00
                        </div>
                    </div>
                    <h3 class="mt-4 text-lg font-medium">Endless Summer Sunset</h3>
                    <p class="text-gray-600">Ruslana Levandovska</p>
                    <p class="text-gray-600">Oil</p>
                </div>
                <div class="text-center">
                    <div class="relative">
                        <img alt="Painting of a person diving into a pool" class="w-full h-auto" height="200"
                            src="https://storage.googleapis.com/a1aa/image/doVNvaOjVTbYPdVclXu41hlE8wFb4iCHjQWsD9QZyfgTKgxJA.jpg"
                            width="300" />
                        <div class="absolute bottom-0 left-0 bg-gray-800 text-white text-sm px-2 py-1">
                            £3,390.00
                        </div>
                    </div>
                    <h3 class="mt-4 text-lg font-medium">Into the Blue</h3>
                    <p class="text-gray-600">Ruslana Levandovska</p>
                    <p class="text-gray-600">Oil</p>
                </div>
            </div>
            <div class="text-center mt-8">
                <button
                    class="bg-white text-indigo-500 border border-indigo-600 px-4 py-2 rounded-lg hover:bg-indigo-600 hover:text-white transition">
                    See more
                </button>
            </div>
        </div>
    </div>
</body>

</html>
