<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LihatmenuController extends Controller
{
    public function showMenu()
    {
        return view('lihatmenu'); // Menampilkan view lihatmenu.blade.php
    }
    public function datamenuCust(Request $request)
    {
        if ($request->has('search')) {
            $data = Menu::where('nama', 'LIKE', '%' . $request->search . '%')->paginate();
        } else {
            $data = Menu::all();
        }
        return view('datamenu', compact('data'));
    }
}
