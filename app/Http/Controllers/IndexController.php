<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home()
    {
        return view('utama');
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
        $dataBerita = Berita::get();
        return view("berita.berita",["dataBerita" => $dataBerita]);
    }
}
