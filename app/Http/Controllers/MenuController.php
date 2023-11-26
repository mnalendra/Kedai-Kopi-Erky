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

    //Tambah Menu
    public function tambahmenu()
    {
        return view(('tambahmenu'));
    }

    // Memasukkan data ke database
    public function insertdata(Request $request)
    {
        // dd($request->all());
        $data = Menu::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotomenu/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('datamenu')->with('sukses', 'Data berhasil ditambahkan!');
    }

    public function editmenu($id)
    {
        $data = Menu::find($id);
        // dd($data);
        return view('editmenu', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $data = Menu::find($id);
        $data->update($request->all());

        return redirect()->route('datamenu')->with('sukses', 'Data berhasil diubah!');
    }

    public function deletemenu($id)
    {
        $data = Menu::find($id);
        $data->Delete();
        return redirect()->route('datamenu')->with('sukses', 'Data berhasil dihapus!');
    }
}
