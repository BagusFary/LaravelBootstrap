@extends('index')

@section('content')
    <section class="signup-section" id="signup">
        <div class="container px-4 px-lg-5">
            <div class=" mt-2">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center right-bck">
                        <div class="registration-right">
                            <h2 class="text-white">Article</h2>
                            @foreach ($dataArticle as $item)
                                <div class="event-list">
                                    <div class="card flex-row mb-3">
                                        <img class="card-img-left img-fluid"
                                            src="{{ asset('/gambarartikel/' . $item->image) }}" />
                                        <div class="card-body">
                                            <h4 class="card-title h5 h4-sm"><i class="fas fa-caret-right"
                                                    aria-hidden="true"></i><span>{{ date_format($item->created_at, 'Y/m/d') }}</span>
                                            </h4>
                                            <a href="/artikel/{{ $item->id }}" class="text-decoration-none">
                                                <p class="card-text">{{ $item->title }}</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{ $dataArticle->links() }}
            </div>
        </div>
    </section>
@endsection
