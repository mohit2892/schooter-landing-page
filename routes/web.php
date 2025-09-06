<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::post('/apply', [SiteController::class, 'apply'])->name('apply');

Route::get('/thank-you', function () {
    return view('thanku');  // This points to resources/views/thanku.blade.php
});

// Route::get('/try', function () {
//     return view('try');  // This points to resources/views/thanku.blade.php
// });

Route::get('/pop', function () {
    return view('pop');  // This points to resources/views/privacy-policy.blade.php
});

// Route::get('/', function () {
//     return view('welcome');
// });
