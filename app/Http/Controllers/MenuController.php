<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = Menu::where('nama', 'LIKE', '%' . $request->search . '%')->paginate();
        } else {
            $data = Menu::all();
        }
        return view('datamenu', compact('data'));
    }
    public function datamenuCust(Request $request)
    {
        if ($request->has('search')) {
            $data = Menu::where('nama', 'LIKE', '%' . $request->search . '%')->paginate();
        } else {
            $data = Menu::all();
        }
        return view('datamenuCustomer', compact('data'));
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
        return redirect()->route('datamenu');
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

        return redirect()->route('datamenu');
    }

    public function deletemenu($id)
    {
        $data = Menu::find($id);
        $data->Delete();
        return redirect()->route('datamenu');
    }
}
