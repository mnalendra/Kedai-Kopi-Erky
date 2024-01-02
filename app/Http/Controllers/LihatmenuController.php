<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LihatmenuController extends Controller
{
    public function showMenu()
    {
        return view('lihatmenu'); // Menampilkan view lihatmenu.blade.php
    }
}

