<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->unique();
            $table->enum('status', ['PNS', 'NONPNS'])->default('PNS');
            $table->string('nama');
            $table->string('password');
            $table->string('alamat')->nullable();
            $table->string('email')->unique();
            $table->date('tgllahir')->nullable();
            $table->string('tmplahir')->nullable();
            $table->timestamps();
            $table->index('nip');
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
