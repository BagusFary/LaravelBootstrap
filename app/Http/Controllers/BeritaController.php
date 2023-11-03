<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $dataBerita = Berita::get();
        return view("berita",["dataBerita" => $dataBerita]);
    }
}