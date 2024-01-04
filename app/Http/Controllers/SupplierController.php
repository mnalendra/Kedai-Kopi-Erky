<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function indexsup(Request $request)
    {
        if ($request->has('search')) {
            $data = Supplier::where('nama_supplier', 'LIKE', '%' . $request->search . '%')->paginate();
        } else {
            $data = Supplier::all();
        }
        return view('datasup', compact('data'));
    }
    //Tambah Supplier
    public function tambahsup()
    {
        return view(('tambahsup'));
    }

    // Memasukkan data ke database
    public function insertdataSup(Request $request)
    {
        Supplier::create($request->all());
        return redirect()->route('datasup');
    
    }
    public function editsup($id)
    {
        $data = Supplier::find($id);
        // dd($data);
        return view('editsup', compact('data'));
    }
    public function updatedatasup(Request $request, $id)
    {
        $data = Supplier::find($id);
        $data->update($request->all());

        return redirect()->route('datasup');
    }
    public function deletesup($id)
    {
        $data = Supplier::find($id);
        $data->Delete();
        return redirect()->route('datasup');
    }
}
