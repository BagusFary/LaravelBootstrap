@extends('index')


@section('content')
<section class="signup-section" id="signup">
    <div class="container px-4 px-lg-5">
        {{-- <h1 class="d-flex justify-content-center text-white">Berita Populer</h1>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                @foreach ($dataBerita as $item)
                <div class="carousel-item {{ $loop->iteration == 1 ? " active" : '' }}">
                    <img src="{{ asset('/gambar/'. $item->gambar) }}" class="d-block w-100"
                        style="object-fit: cover; max-height:400px;" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $item->judul }}</h5>
                        <p>{{ $item->deskripsi }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> --}}
        <div class=" mt-2">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center right-bck">
                    <div class="registration-right">
                        <h2 class="text-white">Our News</h2>
                        @foreach ($dataBerita as $item)
                        <div class="event-list">
                            <div class="card flex-row mb-3">
                                <img class="card-img-left img-fluid" src="{{ asset('/gambar/'. $item->gambar) }}" />
                                <div class="card-body">
                                    <h4 class="card-title h5 h4-sm"><i class="fas fa-caret-right"
                                            aria-hidden="true"></i><span>{{ $item->category->name }}</span><i class="fas fa-caret-right"
                                            aria-hidden="true"></i><span>{{ date_format($item->created_at, 'd F Y') }}</span> </h4>
                                    <a href="news/{{ $item->id }}" class="text-decoration-none">
                                        <p class="card-text">{{ $item->judul }}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{ $dataBerita->links() }}
        </div>
    </div>
</section>
{{-- Berita --}}
@endsection