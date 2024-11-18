<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        .masonry-container {
            max-height: 600px; /* Sets a max height for the scrollable area */
            overflow-y: auto; /* Enables vertical scrolling */
            padding-right: 1rem; /* Adds padding to avoid content cutoff on the right */
        }

        .masonry {
            column-count: 3;
            column-gap: 1rem;
        }

        .masonry-item {
            display: inline-block;
            width: 100%;
            margin-bottom: 1rem;
            position: relative;
            overflow: hidden;
            border-radius: 8px;
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 0.5rem;
            font-size: 0.875rem;
            display: flex;
            flex-wrap: wrap;
            gap: 4px;
        }

        .tag {
            background: rgba(255, 255, 255, 0.8);
            color: #333;
            padding: 0.2rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.75rem;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">

<div class="container mx-auto p-6">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-bold">Portfolio</h1>
        <a href="all-blogs.html" class="flex items-center px-6 py-2 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 transition">
           Add New 
        </a>
    </div>

    <!-- Masonry Grid Layout Container with Scrollable Area -->
    <div class="masonry-container">
        <div class="masonry">
            <!-- Example Artwork Items -->
            <div class="masonry-item group relative">
                <img src="https://images.unsplash.com/photo-1576769782086-7fdab84bca2a?q=80&w=2827&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                     alt="Abstract Artwork 1" 
                     class="w-full h-auto object-cover transition-transform duration-500 transform group-hover:scale-105">
            </div>

            <div class="masonry-item group relative">
                <img src="https://images.unsplash.com/photo-1579158951805-53f80485ed44?q=80&w=2960&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                     alt="Sculpt Artwork" 
                     class="w-full h-auto object-cover transition-transform duration-500 transform group-hover:scale-105">
            </div>
            <div class="masonry-item group relative">
                <img src="https://images.unsplash.com/photo-1582561612644-01026a1d8134?q=80&w=2040&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                     alt="Car Design" 
                     class="w-full h-auto object-cover transition-transform duration-500 transform group-hover:scale-105">
            </div>
            <div class="masonry-item group relative">
                <img src="https://images.unsplash.com/photo-1577081282352-2702d07edf1e?q=80&w=2919&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                     alt="Abstract Artwork 1" 
                     class="w-full h-auto object-cover transition-transform duration-500 transform group-hover:scale-105">
            </div>

            <div class="masonry-item group relative">
                <img src="https://plus.unsplash.com/premium_photo-1664013263421-91e3a8101259?q=80&w=3087&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                     alt="Sculpt Artwork" 
                     class="w-full h-auto object-cover transition-transform duration-500 transform group-hover:scale-105">
            </div>
            <div class="masonry-item group relative">
                <img src="https://plus.unsplash.com/premium_photo-1664438942410-e31ca26a4853?q=80&w=2942&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                     alt="Car Design" 
                     class="w-full h-auto object-cover transition-transform duration-500 transform group-hover:scale-105">
            </div>
        </div>
    </div>
</div>

</body>
</html>
