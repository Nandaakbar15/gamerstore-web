<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $game = Game::all();
        return view("admin.datagame.viewdatagame", [
            'game' => $game
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.datagame.tambahdatagame");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "nama_game" => "required",
            "tgl_rilis" => "required",
            "publisher" => "required",
            "deskripsi" => "required",
            "platform" => "required",
            "harga" => "required",
            "gambar" => "image|mimes:jpeg,png,jpg,gif|max:2048"
        ]);

        $file = $request->file('gambar');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('img', $fileName, 'public');
        $validate['gambar'] = '/storage/' . $path;

        Game::create($validate);
        
        return redirect("/admin/datagame")->with("success", "Data game berhasil ditambah!");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        return view("admin.datagame.ubahdatagame", [
            "game" => $game
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Game $game)
    {
        $validate = $request->validate([
            "nama_game" => "required",
            "tgl_rilis" => "required",
            "publisher" => "required",
            "deskripsi" => "required",
            "platform" => "required",
            "harga" => "required",
            "gambar" => "required|image|mimes:jpeg,png,jpg,gif|max:2048"
        ]);

        if($request->has("gambar")) {
            $file = $request->file('gambar');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('img', $fileName, 'public');
            $validate['gambar'] = '/storage/' . $path;
        }

        $game->update($validate);

        return redirect("/admin/datagame")->with('success', 'Data Game berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        $game->delete();
        return redirect("/admin/datagame")->with('success', 'Data game berhasil dihapus!');
    }
}
