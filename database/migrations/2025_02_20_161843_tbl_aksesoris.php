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
        Schema::create('tbl_aksesoris', function (Blueprint $table) {
            $table->id("id_aksesoris");
            $table->string("nama_aksesoris");
            $table->enum('category', ['Controller', 'Memory Card', 'Cable', 'Headset']);
            $table->string("brand");
            $table->string("compatibility");
            $table->text("deskripsi");
            $table->integer("harga")->unsigned();
            $table->integer("stok")->default(0);
            $table->string("gambar");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_aksesoris');
    }
};
