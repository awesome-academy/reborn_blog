<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $posts = Post::paginate(config('posts.paginate'));

        return view('user.home', ['posts' => $posts]);
    }
}
