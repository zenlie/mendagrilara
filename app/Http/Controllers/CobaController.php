<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        $dt = [
            "title" => "Tentang Saya",
            "menuid" => 2,
            "nama" => "Tommy Irawan Patra",
            "email" => "tommyirawanp@iainkendari.ac.id",
            "alamat" => "BTN Rizky Blok B/2 Ranomeeto Konawe Selatan, Prov. Sulawesi Tenggara",
            "foto" => "img/ttd.png",
        ];
        return view("akun.coba", $dt);
    }

    public function csrf()
    {
        $retval = array("status" => false, "pesan" => "retval " . date("Y-m-d H:i:s") . "<br>");

        return response()->json($retval, 200);
    }
}
