<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun;

class AkunController extends Controller
{
    public function index()
    {
        $dt = [
            "title" => "Daftar Akun",
            "menuid" => 3,
            "data" => Akun::read(),
        ];

        return view('akun', $dt);
    }

    public function detail($slug = null)
    {
        $dt = [
            "title" => "Detail Akun",
            "menuid" => 3,
            "data" => Akun::detail($slug),
        ];
        return view('akun.detail', $dt);
    }
}
