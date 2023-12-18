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
}
