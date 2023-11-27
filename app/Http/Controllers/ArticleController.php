<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Article;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataArticle = Article::paginate(5);
        return view('article.index',["dataArticle" => $dataArticle]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $oldName = $request->file('image')->getClientOriginalName();
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = md5($oldName) . "." . $extension;
            $path = public_path('/gambarartikel');
            $request->file('image')->move($path,$newName);
            $postArticle = Article::create([
                'title' => $request->title,
                'content' => $request->content,
                'image' => $newName 
            ]);

            if($postArticle){
                return redirect('/article')->with('success','Data berhasil ditambahkan');
            } else {
                return redirect('/article')->with('failed','Data gagal ditambahkan');
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dataArticle = Article::find($id);
        return view('article.detail',['dataArticle' => $dataArticle]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataArticle = Article::find($id);
        return view('article.edit', ['dataArticle' => $dataArticle]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->file('image')){
            $oldName = $request->file('image')->getClientOriginalName();
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = md5($oldName) . "." . $extension;
            $path = public_path('/gambarartikel');
            $request->file('image')->move($path,$newName);
            $postArticle = Article::create([
                'title' => $request->title,
                'content' => $request->content,
                'image' => $newName 
            ]);

            if($postArticle){
                return redirect('/article')->with('success','Data berhasil ditambahkan');
            } else {
                return redirect('/article')->with('failed','Data gagal ditambahkan');
            }
        } else {
            $postArticle = Article::create([
                'title' => $request->title,
                'content' => $request->content
            ]);

            if($postArticle){
                return redirect('/article')->with('success','Data berhasil ditambahkan');
            } else {
                return redirect('/article')->with('failed','Data gagal ditambahkan');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataArticle = Article::find($id);
        File::delete(public_path('/gambarartikel/') . $dataArticle->gambar);
        $dataArticle->delete();
        return redirect('/article')->with('success', 'Article Berhasil Dihapus');
    }

    
}
