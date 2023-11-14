@extends('layouts.dashboard')

@section('content')
    <div class=" container row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Berita</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('berita.create') }}"> Tambahkan Berita</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('gagal'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Category</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($dataBerita as $item)
            <tr>

                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->deskripsi }}</td>
                <td>
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('/gambar/' . $item->gambar) }}" class="w-50">
                    </div>
                </td>
                <td>
                    {{ $item->category->name }}
                </td>
                <td>
                    <form action="{{ route('berita.destroy', $item->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('berita.show', $item->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('berita.edit', $item->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                   </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
