<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Konsol;


class PelangganController extends Controller
{
    // tampilan / view untuk dashboard pelanggan
    public function index()
    {
        return view("pelanggan.layouts.home");
    }
}
