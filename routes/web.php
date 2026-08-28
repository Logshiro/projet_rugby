<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Routes du site AOL Rugby
|--------------------------------------------------------------------------
| À fusionner avec ton fichier routes/web.php existant.
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/club', [PageController::class, 'presentation'])->name('presentation');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'sendContact'])
    ->name('contact.send')
    ->middleware('throttle:5,1'); // anti-spam basique : 5 envois / minute
