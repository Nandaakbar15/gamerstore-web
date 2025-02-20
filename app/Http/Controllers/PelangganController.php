<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Konsol;
use App\Models\Aksesoris;


class PelangganController extends Controller
{
    // tampilan / view untuk dashboard pelanggan
    public function index()
    {
        return view("pelanggan.layouts.home");
    }

    public function listgame()
    {

    }

    public function listkonsol()
    {

    }

    public function listaksesoris()
    {

    }
}
