<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Article;
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
        $dataBerita = Berita::paginate(3);
        return view("berita.berita",["dataBerita" => $dataBerita]);
    }

    public function beritaShow($id)
    {
        $dataBerita = Berita::find($id);
        $dataBeritaTerkait = Berita::where('id', "!=", $id)->take(3)->get();
        return view('berita.show',["dataBerita" => $dataBerita, "dataBeritaTerkait" => $dataBeritaTerkait]);
    }

    public function artikel()
    {
        $dataArticle = Article::paginate(3);
        return view("article.article",["dataArticle" => $dataArticle]);
    }

    public function artikelShow($id)
    {
        $dataArticle = Article::find($id);
        $dataArticleTerkait = Article::where('id', "!=", $id)->take(3)->get();
        return view('article.show',["dataArticle" => $dataArticle, "dataArticleTerkait" => $dataArticleTerkait]);
    }
}
