<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = "Tbl_games";
    protected $primaryKey = "id_game";
    protected $fillable = ['nama_game', 'tgl_rilis', 'publisher', 'deskripsi', 'platform', 'harga', 'gambar'];
    use HasFactory;
}
