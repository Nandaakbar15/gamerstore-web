<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsol extends Model
{
    protected $table = "Tbl_konsol";
    protected $primaryKey = "id_konsol";
    protected $fillable = ['nama_konsol', 'pengembang', 'tgl_rilis', 'harga', 'gambar'];
    use HasFactory;
}
