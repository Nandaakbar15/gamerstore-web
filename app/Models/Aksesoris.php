<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aksesoris extends Model
{
    /** @use HasFactory<\Database\Factories\AksesorisFactory> */
    use HasFactory;
    protected $table = "Tbl_aksesoris";
    protected $primaryKey = "id_akesoris";
    protected $fillable = ['nama_aksesoris', 'category', 'brand', 'compatibility', 'deskripsi', 'harga', 'stok', 'gambar'];
}
