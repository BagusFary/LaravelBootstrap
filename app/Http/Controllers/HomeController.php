<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function tentang()
    {
        return view('tentang');
    }

    public function layanan()
    {
        return view('layanan');
    }

    public function hubungi()
    {
        return view('hubungi');
    }
    
    public function berita()
    {
        return view('berita');
    }
}
