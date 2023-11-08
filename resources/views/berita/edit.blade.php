@extends('layouts.dashboard')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Berita
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Gagal!</strong> gagal menambahkan data<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('berita.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" aria-describedby="judul" value="{{ $dataBerita->judul }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" id="deskripsi" aria-describedby="deskripsi" value="{{ $dataBerita->deskripsi }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="gambar">Gambar</label>
                        <img src="{{ asset('/gambar/'. $dataBerita->gambar) }}" class="w-100" alt="">
                        <input type="file" name="gambar" class="form-control" id="gambar" aria-describedby="gambar">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="/berita" class="btn btn-warning">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection