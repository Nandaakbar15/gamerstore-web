<?php

namespace App\Http\Controllers;

use App\Models\Konsol;
use Illuminate\Http\Request;

class KonsolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konsol = Konsol::all();
        return view("admin.datakonsol.viewdatakonsol", [
            "konsol" => $konsol
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.datakonsol.tambahdatakonsol");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "nama_konsol" => "required",
            "pengembang" => "required",
            "tgl_rilis" => "required",
            "harga" => "required",
            "gambar" => "image|mimes:jpeg,png,jpg,gif|max:2048"
        ]);

        $file = $request->file('gambar');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('img', $fileName, 'public');
        $validate['gambar'] = '/storage/' . $path;

        Konsol::create($validate);
        
        return redirect("/admin/datakonsol")->with("success", "Data Konsol berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Konsol $konsol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Konsol $konsol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Konsol $konsol)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Konsol $konsol)
    {
        //
    }
}
