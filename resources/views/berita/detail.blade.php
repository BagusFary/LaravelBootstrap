@extends('layouts.dashboard')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 18rem;">
            <div class="card-header my-2">
                Detail Berita
            </div>
            <img src="{{ asset('/gambar/'. $dataBerita->gambar) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $dataBerita->judul }}</h5>
                @if ($dataBerita->category->name == 'Keuangan')           
                <span class="badge rounded-pill text-bg-success">Keuangan</span>
                @elseif ($dataBerita->category->name == 'Konstruksi')
                <span class="badge rounded-pill text-bg-danger">Konstruksi</span>
                @elseif ($dataBerita->category->name == 'Teknologi')
                <span class="badge rounded-pill text-bg-warning">Teknologi</span>
                @endif
                <p class="card-text">{{ $dataBerita->deskripsi }}</p>
                <a href="/berita" class="btn btn-warning">Back</a>
            </div>
        </div>
    </div>
</div>

@endsection