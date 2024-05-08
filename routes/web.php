<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShortUrlController;
use Illuminate\Support\Facades\Route;
use ShortUrl\ShortUrl;
use ShortURL\ShortURL\Shorten;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/short', [ShortUrlController::class, 'create'])->name('short.frist');
    Route::post('/short', [ShortUrlController::class, 'shorturl'])->name('short.createurl');
    Route::get('/short/url', function () {

        // $shorten = new Shorten();
        $urlshorten = new Shorten();
        // echo  $shorten->text('https://www.youtube.com/watch?v=pYTXs1KP_fE&t=273s');
        echo $urlshortenRe =  $urlshorten->text('https://www.youtube.com/watch?v=pYTXs1KP_fE&t=273s', $custom = "");

        return $urlshortenRe;
    });
});

require __DIR__ . '/auth.php';
