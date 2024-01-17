<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //$fillable definisikan kolom yang akan di isi menggunakan create
    //protected $fillable = ['nip', 'nama', 'password', 'alamat', 'email', 'tgllahir', 'tmplahir'];

    //$guarded definisikan kolom yang tidak boleh di isikan, kebalikan dari fillable
    protected $guarded = ['id'];

    //pengisin di tinker pakai function create
    //php artisan tinker
    /*
        Post::create([
            "nip"=>"1980010101001",
            "nama"=>"Aleesya Salsabila Irawan",
            "password"=>bcrypt("12345678"),
            "alamat"=>"Jl. B. Teratai No. 15 D",
            "email"=>"aleesya7@iainkendari.ac.id",
            "tgllahir"=>"2011-05-22",
            "tmplahir"=>"Kendari",
        ]);    
    */
}
