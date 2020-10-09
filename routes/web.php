<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;



// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [PostsController::class, 'index'])->name('root');

Route::resource('posts', PostsController::class);




// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
