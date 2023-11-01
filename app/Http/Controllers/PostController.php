<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller {
    public function index() {
        return view('post', [
            "title" => "Posts",
//            "Posts" => Post::all()
        "Posts" => Post::latest()->get()
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
