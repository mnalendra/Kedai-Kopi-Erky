<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $data = Menu::all();
        return view('datamenu', compact('data'));
    }
    public function tambahmenu()
    {
        return view(('tambahmenu'));
    }
    public function insertdata(Request $request)
    {
        // dd($request->all());
        Menu::create($request->all());
        return redirect()->route('datamenu')->with('success', 'Data berhasil ditambahkan!');
    }
}
