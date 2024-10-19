<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class WebController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }

    public function register(Request $request)
    {
        return view('register');
    }
    public function resetpassword(Request $request)
    {
        return view('resetpassword'); 
    }

    public function showArtist($id, $section = 'home')
{
    $artists = [
        1 => ['name' => 'Devin Jatho', 'bio' => 'Graphic Designer', 'location' => 'Anywhere', 'image' => 'artist1.jpg'],
        // other artists...
    ];

    if (!isset($artists[$id])) {
        abort(404, 'Artist not found.');
    }

    $artist = $artists[$id];
    $artistId = $id; // Set artistId for use in the view

    return view('artists.show', compact('artist', 'section', 'artistId'));
}
 
    public function listArtists()
{
    $artists = [
        ['id' => 1, 'name' => 'Devin Jatho', 'job' => 'Graphic Designer', 'location' => 'Anywhere', 'image' => 'melody2.jpg', 'posted_at' => '2 days ago'],
        ['id' => 2, 'name' => 'Make Relish', 'job' => 'Production Coordinator', 'location' => 'Anywhere', 'image' => 'melody.webp', 'posted_at' => '3 days ago'],
        ['id'=>  3, 'name'=> 'Geri Walker',  'job'  => 'Web Designer', 'location' => 'America', 'image' => 'artist2.jpg', 'posted_at' => '4 days ago'],
        ['id'=>  4, 'name'=> 'Paul Vane',  'job'  => 'Illustrator', 'location' => 'America', 'image' => 'artist2.jpg', 'posted_at' => '4 days ago'],
        ['id'=>  5, 'name'=> 'Steve James',  'job'  => 'Production Coordinator', 'location' => 'America', 'image' => 'artist2.jpg', 'posted_at' => '4 days ago'],
        ['id'=>  6, 'name'=> 'Diu South',  'job'  => 'Graphic Designer', 'location' => 'America', 'image' => 'artist2.jpg', 'posted_at' => '4 days ago'],
        ['id'=>  7, 'name'=> 'Luminous Ror',  'job'  => 'Production Coordinator', 'location' => 'America', 'image' => 'artist2.jpg', 'posted_at' => '4 days ago'],
        ['id'=>  8, 'name'=> 'Gemini',  'job'  => 'Production Coordinator', 'location' => 'America', 'image' => 'artist2.jpg', 'posted_at' => '4 days ago'],
        ['id'=>  9, 'name'=> 'Scorpio',  'job'  => 'Production Coordinator', 'location' => 'America', 'image' => 'artist2.jpg', 'posted_at' => '4 days ago'],
    ];

    return view('artists.index', compact('artists'));
}
        public function explore(Request $request)
    {
        return view('explore');
    }

    public function landing(Request $request)
    {
        return view('landing');
    }

    public function landing2(Request $request)
    {
        return view('landing2');
    }

    public function home(Request $request)
    {
        return view('Home.home');
    }

    public function showCollection($category)
{
    // Example data for the artworks
    $artworks = [
        [
            'id' => 1,  // Add 'id' field for each artwork
            'artist' => 'Something4U',
            'title' => 'ROmantic Evening',
            'year' => '2024',
            'gallery' => 'Oily Art',
            'price' => 'US$5,800',
            'image' => 'paintingart.jpg',
            'interest' => true
        ],
        [
            'id' => 2,  // Add 'id' field for each artwork
            'artist' => 'Something4U',
            'title' => 'Artwork 2',
            'year' => '2024',
            'gallery' => 'Painting Art',
            'price' => 'US$4,200',
            'image' => 'painting2.webp',
            'interest' => false
        ],
        3 => [
            'id' => 3,
            'artist' => 'Something4U',
            'title' => 'Indian Creature',
            'year' => '2024',
            'gallery' => 'Lilienthal Gallery',
            'price' => 'US$5,500',
            'image' => 'indianart.webp',
            'interest' => false
        ],
        4 => [
            'id' => 4,
            'artist' => 'Something4U',
            'title' => 'Sweety Night',
            'year' => '2023',
            'gallery' => 'Lilienthal Gallery',
            'price' => 'US$5,500',
            'image' => 'painting2.webp',
            'interest' => false
        ],
        5 => [
            'id' => 5,
            'artist' => 'Something4U',
            'title' => 'Sweet Painting',
            'year' => '2025',
            'gallery' => 'Lilienthal Gallery',
            'price' => 'US$5,500',
            'image' => 'paintingart4.png',
            'interest' => false
        ],
    ];

    return view('artists.sections.collection-detail', compact('artworks', 'category'));
}

    private function getArtworksByCategory($category)
    {
        $allArtworks = [
            'all' => [
                ['title' => 'Artwork 1', 'artist' => 'Artist 1', 'price' => '$5,000', 'image' => 'artwork1.jpg'],
                ['title' => 'Artwork 2', 'artist' => 'Artist 2', 'price' => '$3,500', 'image' => 'artwork2.jpg'],
            ],
            'featured' => [
                ['title' => 'Featured Artwork', 'artist' => 'Artist 2', 'price' => '$3,500', 'image' => 'featured1.jpg'],
            ],
            'anime' => [
                ['title' => 'Anime Artwork', 'artist' => 'Artist 3', 'price' => '$2,500', 'image' => 'anime1.jpg'],
            ],
        ];

        return $allArtworks[$category] ?? [];
    }

    public function showArtwork($id)
{
    $artworks = [
        1 => [
            'id' => 1,
            'artist' => 'Something4U',
            'title' => 'Romantic Evening',
            'medium' => 'Oil',
            'price' => '£3,290.00',
            'year' => '2024',
            'gallery' => 'Lilienthal Gallery',
            'image' => 'paintingart.jpg',
            'description' => 'In this painting, I sought to capture an intimate moment of affection amidst the quiet calm of a serene evening. The richness of oil paints enhances the contrast between the deep shadows and the gentle light on their faces, emphasizing both their allure and the warmth of their closeness. This piece brings a sense of love and timeless elegance to any space, evoking the beauty of a heartfelt connection.',
            'dimensions' => 'W 20" x H 16" x D 0.75"',
            'style' => 'Impressionistic',
            'subject' => 'People',
            'category' => 'Oil'  // Add the category here
        ],
    ];

    if (!isset($artworks[$id])) {
        abort(404, 'Artwork not found.');
    }

    $artwork = $artworks[$id];

    return view('artists.sections.artwork-detail', compact('artwork'));
}
public function showCategory($category)
{
    // Logic to fetch artworks based on the category
    $artworks = $this->getArtworksByCategory($category);

    return view('artists.sections.collection-detail', compact('artworks', 'category'));
}

// FavoritesController Profile section
public function follows() {
    return view('profile.favorites.follows');
}

public function likes() {
    return view('profile.favorites.like');
}

public function cart() {
    return view('profile.favorites.cart');
}

public function show()
    {
        return view('layouts.order-summary');
    }

    public function orderHistory()
    {
        return view('profile.order-history');
    }

}