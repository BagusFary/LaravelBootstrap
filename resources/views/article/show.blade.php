@extends('index')

@section('content')
    <section class="signup-section" id="signup">
        <div class="container mt-4">
            <div class="row">
              <div class="col-lg-8">
                <article>
                  <h2 class="text-light">{{ $dataArticle->title }}</h2>
                  <p class="text-light">Tanggal : {{ date_format($dataArticle->created_at, 'd F Y') }}</p>
                  <img src="{{ asset("/gambarartikel/".$dataArticle->image) }}" class="img-fluid mb-3" alt="Gambar Artikel">
                  <p class="text-light">{{ $dataArticle->content }}</p>
                </article>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title text-light">Artikel Terkait</h5>
                    <ul class="list-unstyled">
                        @foreach ($dataArticleTerkait as $item)
                        <li class="my-3">
                            <a class="text-decoration-none text-light text-decoration-underline" href="/artikel/{{ $item->id }}">{{ $item->title }}</a>
                        </li>
                        @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
@endsection
