@extends('layouts.dashboard')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Berita
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
                        <input type="text" name="judul" class="form-control" id="judul" aria-describedby="judul">
                    </div>
                    <div class="form-group mb-2">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" id="deskripsi" aria-describedby="deskripsi">
                    </div>
                    <div class="form-group mb-2">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="gambar" aria-describedby="password">
                    </div>
                   <div class="form-group mb-2">
                    <select class="form-select" aria-label="Default select example">
                            @foreach ($Category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                      </select>
                   </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection