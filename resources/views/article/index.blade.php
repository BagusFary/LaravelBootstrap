@extends('layouts.dashboard')

@section('content')
    <div class=" container row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>Artikel</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('article.create') }}"> Tambahkan Artikel</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('failed'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>Title</th>
            <th>Content</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($dataArticle as $item)
            <tr>

                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->content }}</td>
                <td>
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('/gambarartikel/' . $item->image) }}" class="w-50">
                    </div>
                </td>
                <td>
                    <form action="{{ route('article.destroy', $item->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('article.show', $item->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('article.edit', $item->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                   </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
