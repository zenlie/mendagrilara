<?php

namespace App\Models;

class Akun
{
    private static $dataarr = [
        [
            "id" => 1,
            "nama" => "Tommy Irawan Patra",
            "alamat" => "BTN Rizky Blok B/II Ranomeeto Konsel Sulawesi Tenggara",
        ],
        [
            "id" => 2,
            "nama" => "Amalia Desi Arisanti",
            "alamat" => "Jl. Teratai No. 15 B Kel. Watu Watu Kendari Sulawesi Tenggara",
        ],
        [
            "id" => 3,
            "nama" => "Aleesya Salsabila Irawan",
            "alamat" => "BTN Rizky Blok B/II Ranomeeto Konsel Sulawesi Tenggara",
        ],
        [
            "id" => 4,
            "nama" => "Alfath",
            "alamat" => "Jl. Teratai No. 15 D Kendari Sulawesi Tenggara",
        ],
    ];

    public static function read()
    {
        return collect(self::$dataarr);
    }

    public static function detail($id = null)
    {
        $retval = [];
        $data = static::read();
        /*
        foreach (self::$dataarr as $i => $dp) {
            if ($dp['id'] == $id) {
                $retval = $dp;
                break;
            }
        }
        return $retval;
        */
        return $data->firstWhere("id", $id);
    }
}
