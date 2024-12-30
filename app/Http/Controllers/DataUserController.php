<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DataUserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view("admin.datauser.viewdatauser", [
            "user" => $user
        ]);
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return redirect("/admin/datauser")->with("success", "Data User berhasil di hapus!");
    }
}
