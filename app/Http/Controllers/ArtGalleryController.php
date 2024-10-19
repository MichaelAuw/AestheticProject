<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtGalleryController extends Controller
{
    public function show($id)
{
    $artworks = [
        1 => [
            'title' => 'Fantasy World Creation',
            'artist' => 'Something4U',
            'date' => 'Dec 17, 2023',
            'views' => '10K',
            'likes' => '1,530',
            'comments' => '20',
            'tags' => ['Fantasy', 'Kingdom', 'Nature', 'Mystic'],
            'image' => 'https://storage.googleapis.com/a1aa/image/T0ehqXZL7ZXoekxiVgHXClkcFwZOua5qbZsnwUlXJoh1YmnTA.jpg',
            'commentsList' => [
                ['avatar' => 'https://storage.googleapis.com/a1aa/image/avatar1.jpg', 'name' => 'Alexander R.', 'content' => 'Nice Drawing! Can you teach me?'],
                ['avatar' => 'https://storage.googleapis.com/a1aa/image/avatar2.jpg', 'name' => 'Brown D. J.', 'content' => 'What could I say? I love it!'],
                ['avatar' => 'https://storage.googleapis.com/a1aa/image/avatar3.jpg', 'name' => 'Beary the Bear', 'content' => 'It’s like we’ve been through a long journey and arrive at this hidden kingdom.']
            ],
            'relatedArtworks' => [
                ['image' => 'https://storage.googleapis.com/a1aa/image/EW8fPeUHfCShfSYJAjye0xPBFpieWOu1rnSvxwtuA6YoMm55E.jpg'],
                // Add more related artwork
            ],
            'suggestedArtists' => [
                ['avatar' => 'https://storage.googleapis.com/a1aa/image/D5MttRptqfVwQCIbk6DTbZxGQFFXdRxV2ACJEvekS7Z3YmnTA.jpg', 'name' => 'Yuzutei'],
                ['avatar' => 'https://storage.googleapis.com/a1aa/image/D5MttRptqfVwQCIbk6DTbZxGQFFXdRxV2ACJEvekS7Z3YmnTA.jpg', 'name' => 'Li Shenshun'],
                // Add more suggested artists
            ],
        ],
        // Add more artworks as needed
    ];

    if (!isset($artworks[$id])) {
        abort(404);
    }

    return view('art-gallery-detail', [
        'artwork' => $artworks[$id]
    ]);
}

}
