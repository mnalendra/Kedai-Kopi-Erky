<?php

namespace App\Http\Controllers;


class LihatmenuController extends Controller
{
    public function showMenu()
    {
        return view('lihatmenu'); // Menampilkan view lihatmenu.blade.php
    }
}
