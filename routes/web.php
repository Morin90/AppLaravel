<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('welcome');
Route::get('/posts/{id}', [PostController::class, 'show'])->whereNumber('id');
Route::get('/contact', [PostController::class, 'contact'])->name('contact');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

// Route::get('posts', function () {
//     return response()->json([
//         'name' => 'John Doe',
//         'message' => 'Hello World'
//     ]);
// });

// Route::get('articles', function () {
//     return view('articles');
// });

require __DIR__ . '/auth.php';
