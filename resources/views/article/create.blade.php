@extends('layouts.dashboard')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Artikel
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
                <form method="post" action="{{ route('article.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-2">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" aria-describedby="title">
                    </div>
                    <div class="form-group mb-2">
                        <label for="content">Content</label>
                        <input type="text" name="content" class="form-control" id="content" aria-describedby="content">
                    </div>
                    <div class="form-group mb-2">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control" id="image" aria-describedby="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection