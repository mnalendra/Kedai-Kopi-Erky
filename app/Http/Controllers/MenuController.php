<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('datamenu');
    }
    public function tambahmenu()
    {
        return view(('tambahmenu'));
    }
}
