<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Tbl_games', function (Blueprint $table) {
            $table->id("id_game");
            $table->string("nama_game");
            $table->date("tgl_rilis");
            $table->string("publisher");
            $table->string("deskripsi");
            $table->string("platform");
            $table->integer("harga")->unsigned();
            $table->string("gambar");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Tbl_games');
    }
};
