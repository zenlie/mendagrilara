<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $dt = [
            "title" => "Daftar Akun",
            "menuid" => 3,
            "data" => Post::all(),
        ];

        return view('post.post', $dt);
    }

    public function detail(Post $slug)
    {
        $dt = [
            "title" => "Detail Akun",
            "menuid" => 3,
            "data" => $slug,
            "menu" => "coba",
        ];
        return view('post.detail', $dt);
    }
}
