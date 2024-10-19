<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="bg-gray-100 font-roboto">
    <!-- Navbar Start -->
    @include('layouts.navbar-login')
    <!-- Navbar End -->

    <div class="bg-white">
        <!-- Profile Banner Section -->
        <div class="relative">
            <img src="{{ asset('images/Assets/hompage.jpg') }}" alt="Profile banner" class="w-full h-48 object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-lime-500 opacity-50"></div>
        </div>

        <div class="container mx-auto px-4 py-6">
            <div class="flex">
                <!-- Sidebar: Profile Information -->
                @include('artists.artist-profile-sidebar')

                <!-- Main Content Area -->
                <div class="w-3/4 ml-4">
                    <!-- Navigation Tabs -->
                    <nav class="flex space-x-4">
                        <a href="{{ route('artist.show', ['id' => $artistId, 'section' => 'home']) }}" class="text-gray-600 hover:text-gray-800">Home</a>
                        <a href="{{ route('artist.show', ['id' => $artistId, 'section' => 'portfolio']) }}" class="text-gray-600 hover:text-gray-800">Portfolio</a>
                        <a href="{{ route('artist.show', ['id' => $artistId, 'section' => 'collection']) }}" class="text-gray-600 hover:text-gray-800">Collection</a>
                        <a href="{{ route('artist.show', ['id' => $artistId, 'section' => 'posts']) }}" class="text-gray-600 hover:text-gray-800">Posts</a>
                        <a href="{{ route('artist.show', ['id' => $artistId, 'section' => 'community']) }}" class="text-gray-600 hover:text-gray-800">Community</a>
                        <a href="{{ route('artist.show', ['id' => $artistId, 'section' => 'about']) }}" class="text-gray-600 hover:text-gray-800">About</a>
                    </nav>



                    <!-- Section Rendering -->
                <div class="mt-4">
                   @if($section === 'home')
                       @include('artists.sections.home')
                   @elseif($section === 'portfolio')
                       @include('artists.sections.portfolio')
                   @elseif($section === 'collection')
                       @include('artists.sections.collection')
                   @elseif($section === 'posts')
                       @include('artists.sections.posts')
                   @elseif($section === 'community')
                       @include('artists.sections.community')
                   @elseif($section === 'about')
                       @include('artists.sections.about')
                   @endif
                </div>
                
</body>
</html>