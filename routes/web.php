<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ArtGalleryController;
use App\Http\Controllers\CheckoutController;

Route::get('/', function () {
    return view('login');
});

Route::get('/login', [App\Http\Controllers\WebController::class, 'login']);

Route::get('/home', [App\Http\Controllers\WebController::class, 'home'])->name('home');

Route::get('/register', [App\Http\Controllers\WebController::class, 'register']);

Route::get('/resetpassword', [WebController::class, 'resetpassword']);

Route::get('/artists', [App\Http\Controllers\WebController::class, 'listArtists'])->name('artist.list');

Route::get('/artists/{id}/{section?}', [WebController::class, 'showArtist'])->name('artist.show');

Route::get('/collection/{category}', [WebController::class, 'showCollection'])->name('collection.show');

Route::get('/category/{category}', [WebController::class, 'showCategory'])->name('category.show');

Route::get('/artwork/{id}', [WebController::class, 'showArtwork'])->name('artwork.show');

Route::get('/explore', [App\Http\Controllers\WebController::class, 'explore']);

Route::get('/landing', [App\Http\Controllers\WebController::class, 'landing']);

Route::get('/art-gallery', function () {
    return view('art-gallery');
});

Route::get('/art-gallery/{id}', [ArtGalleryController::class, 'show'])->name('art-gallery.show');

Route::get('/favorites/follows', [WebController::class, 'follows'])->name('favorites.follows');

Route::get('/favorites/likes', [WebController::class, 'likes'])->name('favorites.likes');

Route::get('/favorites/cart', [WebController::class, 'cart'])->name('favorites.cart');

Route::get('/checkout', [CheckoutController::class, 'show'])->name('checkout');

Route::get('/order-summary', [WebController::class, 'show'])->name('order-summary');

Route::get('/order-history', [WebController::class, 'orderHistory'])->name('order.history');

Route::get('/landing2', [App\Http\Controllers\WebController::class, 'landing2']);

Route::get('/home', [App\Http\Controllers\WebController::class, 'home'])->name('Home.home');

