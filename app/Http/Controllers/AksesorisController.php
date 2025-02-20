<?php

namespace App\Http\Controllers;

use App\Models\Aksesoris;
use Illuminate\Http\Request;

class AksesorisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aksesoris = Aksesoris::all();
        return view("admin.dataaksesoris.viewdataaksesoris", [
            "aksesoris" => $aksesoris
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.dataaksesoris.tambahAksesoris");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Aksesoris $aksesoris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Aksesoris $aksesoris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Aksesoris $aksesoris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Aksesoris $aksesoris)
    {
        //
    }
}
