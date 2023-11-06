<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Http\Requests\BeritaPostRequest;
use App\Http\Requests\BeritaUpdateRequest;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBerita = Berita::get();
        return view("berita.index",["dataBerita" => $dataBerita]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BeritaPostRequest $request)
    {
        $postBerita = Berita::create($request->all());
        if($postBerita){
            return redirect('/berita')->with('success', 'Berita Berhasil Ditambahkan');
        } else {
            return redirect('/berita')->with('success', "Berita Gagal Ditammbahkan");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dataBerita = Berita::find($id);
        return view('berita.detail',['dataBerita' => $dataBerita]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataBerita = Berita::find($id);
        return view('berita.edit', compact($dataBerita));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BeritaUpdateRequest $request, string $id)
    {
        Berita::find($id)->update($request->all);
        return redirect('/berita')->with('success', 'Mahasiswa Berhasil DiUpdate');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Berita::find($id)->delete();
        return redirect('/berita')->with('success', 'Berita Berhasil Dihapus');
    }
}
