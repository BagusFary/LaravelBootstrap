@extends('layouts.dashboard')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 18rem;">
            <div class="card-header my-2">
                Detail Artikel
            </div>
            <img src="{{ asset('/gambarartikel/'. $dataArtikel->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $dataArtikel->title }}</h5>
                <p class="card-text">{{ $dataArtikel->content }}</p>
                <a href="/berita" class="btn btn-warning">Back</a>
            </div>
        </div>
    </div>
</div>

@endsection