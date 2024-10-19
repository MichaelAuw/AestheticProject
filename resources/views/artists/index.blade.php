@php
    use Illuminate\Support\Str;
@endphp

@extends('layouts.app')

@section('title', 'Artist List')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Artist List - Hero Section</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #F3F4F6; /* Light Gray background for body */
    }
    .custom-search {
      border-radius: 9999px;
      display: flex;
      background-color: white;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .custom-input {
      flex-grow: 1;
      padding-left: 20px;
      border: none;
      border-radius: 9999px 0 0 9999px;
      background-color: white;
      font-size: 16px;
      transition: all 0.3s ease;
    }
    .custom-button {
      background-color: #6366f1;
      color: white;
      padding: 12px 24px;
      border-radius: 0 9999px 9999px 0;
      cursor: pointer;
      display: inline-block;
      font-size: 16px;
      font-weight: 500;
      transition: all 0.3s ease;
    }
    .custom-button:hover {
      background-color: #4f46e5;
      transform: scale(1.05);
    }
    .artist-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    }
    .custom-input:focus {
      outline: none;
      box-shadow: 0 0 8px rgba(99, 102, 241, 0.5);
    }
    .hero-title {
      font-size: 2.5rem;
      line-height: 1.2;
    }
    .hero-title span {
      background: linear-gradient(to right, #6366f1, #ec4899);
      -webkit-background-clip: text;
      color: transparent;
    }
    /* Show More button */
    .show-more-button {
      background-color: #6366f1;
      color: white;
      padding: 12px 24px;
      border-radius: 9999px;
      cursor: pointer;
      font-size: 16px;
      font-weight: 500;
      transition: all 0.3s ease;
    }
    .show-more-button:hover {
      background-color: #4f46e5;
      transform: scale(1.05);
    }
  </style>
</head>
<body class="bg-white-100">

  <!-- Hero Section -->
  <div class="relative bg-gradient-to-br from-blue-50 via-indigo-100 to-purple-100 py-16 lg:py-20 min-h-[60vh] flex items-center justify-center">
    <!-- Gradient background shapes -->
    <div aria-hidden="true" class="absolute inset-0 flex justify-center items-center z-0">
      <div class="bg-gradient-to-r from-violet-300/50 to-purple-100 blur-3xl w-[20rem] h-[20rem] rounded-full absolute -top-10 right-10"></div>
      <div class="bg-gradient-to-tl from-blue-50 via-blue-100 to-blue-50 blur-3xl w-[50rem] h-[30rem] rounded-full origin-top-left -rotate-12 -translate-x-[15rem]"></div>
    </div>
    
    <!-- Hero Content -->
    <div class="relative z-10 text-center px-4 sm:px-6 lg:px-8">
      <p class="inline-block text-sm font-medium bg-clip-text bg-gradient-to-l from-blue-600 to-violet-500 text-transparent">
        Explore Talented Artists
      </p>
      <h1 class="mt-3 font-semibold text-gray-800 hero-title">
        Discover the World of <span>Creativity</span>
      </h1>
      <p class="mt-4 text-md text-gray-600">
        Browse through hundreds of artists and find the perfect match for your creative projects.
      </p>
      
      <!-- Search Bar -->
      <div class="mt-8 flex justify-center">
        <div class="relative w-full max-w-xl custom-search">
          <input class="custom-input" placeholder="Search for artists..." type="text" id="searchInput">
          <button class="custom-button" onclick="filterArtists()">Search</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Artist List Section -->
  <div class="bg-white py-10">
    <div class="container mx-auto px-6">
      <!-- Job Count and Filters -->
      <div class="flex justify-between items-center mb-6">
          <h2 class="text-2xl font-bold text-gray-800">244 Artists</h2>
          <div class="flex items-center space-x-4">
              <div class="relative">
                  <select class="appearance-none pl-4 pr-10 py-2 bg-white border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-500" id="locationFilter">
                      <option value="Anywhere">Anywhere</option>
                  </select>
                  <i class="fas fa-chevron-down absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
              </div>
              <div class="relative">
                  <select id="filterField" class="appearance-none pl-4 pr-10 py-2 bg-white border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-500" onchange="filterArtists()">
                      <option value="">All Creative Fields</option>
                      <option value="Graphic Designer">Graphic Designer</option>
                      <option value="Illustrator">Illustrator</option>
                      <option value="Web Designer">Web Designer</option>
                  </select>
                  <i class="fas fa-chevron-down absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
              </div>
          </div>
      </div>

      <!-- Artist Grid -->
      <div id="artistGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          @foreach($artists as $artist)
              <div class="artist-card bg-white p-6 rounded-lg shadow-lg hover:shadow-2xl transition transform hover:-translate-y-2 duration-300 ease-in-out" data-field="{{ $artist['job'] }}" data-name="{{ $artist['name'] }}">
                  <div class="flex items-center mb-4">
                      <!-- Artist Image -->
                      <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-indigo-500">
                          <img src="{{ asset('images/' . $artist['image']) }}" alt="{{ $artist['name'] }}" class="w-full h-full object-cover">
                      </div>
                      <div class="ml-4">
                          <h2 class="text-xl font-semibold text-gray-900">{{ $artist['name'] }}</h2>
                          <p class="text-sm text-gray-500">{{ $artist['job'] }}</p>
                          <p class="text-xs text-gray-400">{{ $artist['location'] }}</p>
                      </div>
                  </div>
                  <p class="text-gray-600 mb-4">{{ $artist['bio'] ?? 'No bio available' }}</p>
                  <div class="flex justify-between items-center">
                      <a href="{{ route('artist.show', $artist['id']) }}" class="text-indigo-600 hover:text-indigo-800 font-medium">View Profile</a>
                      <p class="text-xs text-gray-400">{{ $artist['posted_at'] ?? now()->subDays(rand(1, 10))->diffForHumans() }}</p>
                  </div>
              </div>
          @endforeach
      </div>

      <!-- Show More Button -->
      <div class="flex justify-center mt-8">
        <button class="show-more-button" onclick="loadMoreArtists()">Show More</button>
      </div>
    </div>
  </div>

<script>
    // JavaScript for live filtering artists based on search input and dropdown
    function filterArtists() {
        const searchInput = document.getElementById('searchInput').value.toLowerCase();
        const filterField = document.getElementById('filterField').value;
        const artistCards = document.querySelectorAll('.artist-card');

        artistCards.forEach(card => {
            const name = card.getAttribute('data-name').toLowerCase();
            const field = card.getAttribute('data-field');
            const matchesName = name.includes(searchInput);
            const matchesField = filterField === "" || field === filterField;

            if (matchesName && matchesField) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    }

    // Placeholder function for loading more artists (can be replaced with backend logic)
    function loadMoreArtists() {
        alert('Loading more artists...');
        // Logic to dynamically load more artists can be added here
    }
</script>

@endsection
