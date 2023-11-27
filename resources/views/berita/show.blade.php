@extends('index')

@section('content')
    <section class="signup-section" id="signup">
        <div class="container mt-4">
            <div class="row">
              <div class="col-lg-8">
                <article>
                  <h1 class=text-light>{{ $dataBerita->judul }}</h1>
                  <p class="text-light">Tanggal: {{ date_format($dataBerita->created_at, 'd F Y') }}</p>
                  <img src="{{ asset('/gambar/'. $dataBerita->gambar ) }}" class="img-fluid mb-3" alt="Gambar Berita">
                  <p class=text-light>{{ $dataBerita->deskripsi }}</p>
                  <p class=text-light>Bagikan berita ini: 
                    <a href="#" class="btn btn-primary btn-sm">Facebook</a>
                    <a href="#" class="btn btn-primary btn-sm">Twitter</a>
                    <a href="#" class="btn btn-primary btn-sm">Email</a>
                  </p>
                </article>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title text-light">Berita Terkait</h5>
                    <ul class="list-unstyled">
                      @foreach ($dataBeritaTerkait as $item)
                      <li><a href="/berita/{{ $item->id }}">{{ $item->judul }}</a></li>
                      @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
@endsection
