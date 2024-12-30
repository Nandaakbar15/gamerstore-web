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
        Schema::create('Tbl_konsol', function (Blueprint $table) {
            $table->id("id_konsol");
            $table->string("nama_konsol");
            $table->string("pengembang");
            $table->date("tgl_rilis");
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
        Schema::dropIfExists('Tbl_konsol');
    }
};
