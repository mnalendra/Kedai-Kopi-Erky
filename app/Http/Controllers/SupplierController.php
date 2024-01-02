<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $data = Supplier::where('nama', 'LIKE', '%' . $request->search . '%')->paginate();
        } else {
            $data = Supplier::all();
        }
        return view('datasup', compact('data'));
    }
    //Tambah Menu
    public function tambahsup()
    {
        return view(('tambahsup'));
    }

    // Memasukkan data ke database
    public function insertdata(Request $request)
    {
        // dd($request->all());
        $data = Supplier::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotomenu/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('datasup');
    }
    public function deletesup($id)
    {
        $data = Supplier::find($id);
        $data->Delete();
        return redirect()->route('datasup');
    }
    public function editsup($id)
    {
        $data = Supplier::find($id);
        // dd($data);
        return view('editsup', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $data = Supplier::find($id);
        $data->update($request->all());

        return redirect()->route('datasup');
    }
}
