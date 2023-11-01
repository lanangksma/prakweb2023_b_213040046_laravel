<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "HOME"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "ABOUT",
        "name" => "Muhamad Lanang Abid Kusuma",
        "email" => "lanang.213040046@mail.unpas.ac.id",
        "image" => "waduh.jpg"
    ]);
});

Route::get('/blog', function () {

    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{slug}', [PostController::class, 'show']);
