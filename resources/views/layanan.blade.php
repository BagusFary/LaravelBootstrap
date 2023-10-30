@extends('index')

@section('content')
    <!-- Projects-->
    <section class="projects-section bg-light" id="projects">
        <div class="container px-4 px-lg-5">
            <!-- Featured Project Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/jasakeuangan.jpg"
                        alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>Jasa Keuangan</h4>
                        <p class="text-black-50 mb-0">Membantu klien dalam pemilihan dan pengelolaan portofolio investasi dan juga menyediakan penelitian pasar dan analisis untuk mendukung keputusan investasi.</p>
                    </div>
                </div>
            </div>
            <!-- Project One Row-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/konstruksi.png" alt="..." /></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">Konstruksi</h4>
                                <p class="mb-0 text-white-50">Menentukan bagaimana perusahaan diorganisasi, termasuk manajemen tingkat atas, departemen, dan tanggung jawab masing masing unit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Two Row-->
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="assets/img/teknologi.jpg" alt="..." /></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Media dan Teknologi</h4>
                                <p class="mb-0 text-white-50">Menyediakan platform online yang memungkinan klien untuk mengakses dan mengelola portofoloio investasi mereka secara digital.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection