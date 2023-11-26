@extends('index')

@section('content')
    <section class="signup-section" id="signup">
        <div class="container mt-4">
            <div class="row">
              <div class="col-lg-8">
                <article>
                  <h1>Judul Berita</h1>
                  <p class="text-muted">Tanggal: 26 November 2023</p>
                  <img src="https://via.placeholder.com/800x400" class="img-fluid mb-3" alt="Gambar Berita">
                  <p>Deskripsi singkat mengenai berita yang penting dan menarik perhatian pembaca. Berikan informasi dasar tentang apa yang akan dibahas dalam berita ini.</p>
                  <p>Isi berita yang lebih lengkap dan detail, menguraikan peristiwa atau topik yang sedang dibahas.</p>
                  <p>Sumber: <a href="#">Nama Sumber Berita</a></p>
                  <p>Bagikan berita ini: 
                    <a href="#" class="btn btn-primary btn-sm">Facebook</a>
                    <a href="#" class="btn btn-info btn-sm">Twitter</a>
                    <a href="#" class="btn btn-danger btn-sm">Email</a>
                  </p>
                </article>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Berita Terkait</h5>
                    <ul class="list-unstyled">
                      <li><a href="#">Berita 1</a></li>
                      <li><a href="#">Berita 2</a></li>
                      <li><a href="#">Berita 3</a></li>
                      <li><a href="#">Berita 4</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
@endsection
