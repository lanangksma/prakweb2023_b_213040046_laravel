<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

use App\Models\Category;

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
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'POST CATEGORIES',
        'categories' => Category::all()
        ]);
});

Route::get('/categories/{category:slug}', function (\App\Models\Category $category){
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});

Route::get('/authors/{author:username}', function (\App\Models\User $author){
    return view('posts', [
        'title' => 'USER POSTS',
        'posts' => $author->posts
        ]);
});
