<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\Berita;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\BeritaPostRequest;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBerita = Berita::with('category:id,name')->get();
        return view("berita.index", ["dataBerita" => $dataBerita]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Category = Category::get();
        return view('berita.create', ["Category" => $Category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BeritaPostRequest $request)
    {

        $originalName = $request->file('gambar')->getClientOriginalName();
        $extension = $request->file('gambar')->getClientOriginalExtension();
        $newName = md5($originalName . Carbon::now()) . "." . $extension;
        $path = public_path('/gambar');
        $request->file('gambar')->move($path, $newName);
        $postBerita = Berita::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $newName,
            'category_id' => $request->category_id
        ]);
        
        if ($postBerita) {
            return redirect('/berita')->with('success', 'Berita Berhasil Ditambahkan');
        } else {
            return redirect('/berita')->with('gagal', "Berita Gagal Ditammbahkan");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dataBerita = Berita::find($id);
        return view('berita.detail', ['dataBerita' => $dataBerita]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataBerita = Berita::with('category:id,name')->find($id);
        $Category = Category::get();
        return view('berita.edit', ['dataBerita' => $dataBerita, 'Category' => $Category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataOld = Berita::find($id);
        if ($request->file('gambar')) {
            File::delete(public_path('/gambar/'), $dataOld->gambar);
            $time = md5(Carbon::now());
            $originalName = $request->file('gambar')->getClientOriginalName();
            $extension = $request->file('gambar')->getClientOriginalExtension();
            $newName = md5($originalName . $time) . "." . $extension;
            $path = public_path('/gambar');
            $request->file('gambar')->move($path, $newName);
            $dataBerita = Berita::find($id);
            $dataBerita->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'category_id' => $request->category_id,
                'gambar' => $newName
            ]);
        } else {
            $dataBerita = Berita::find($id);
            $dataBerita->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'category_id' => $request->category_id
            ]);
        }

        if ($dataBerita) {
            return redirect('/berita')->with('success', 'Berita Berhasil DiUpdate');
        } else {
            return redirect('/berita')->with('success', 'Berita Berhasil DiUpdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataBerita = Berita::find($id);
        File::delete(public_path('/gambar/') . $dataBerita->gambar);
        $dataBerita->delete();
        return redirect('/berita')->with('success', 'Berita Berhasil Dihapus');
    }
}
