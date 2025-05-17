@extends('layouts.app')

@section('content')
        <!-- start page title -->
        <div style="max-width: 1200px; margin: 0 auto; padding-left: 15px; padding-right: 15px;">
            <section class="top-space-margin page-title-big-typography border-radius-6px lg-border-radius-0px p-0"
                data-parallax-background-ratio="0.5"
                style="background-image: url('{{ asset('images/example2.png') }}'); background-size: cover; background-position: center; min-height: 300px; border-radius: 12px;">
                
                <div class="opacity-extra-medium" style="background-color: rgba(0, 0, 0, 0.5);"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-center small-screen">
                        <div class="col-lg-8 position-relative text-center page-title-extra-large"
                            data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                            
                            <h1 class="m-auto"
                                style="
                                    color: white;
                                    font-family: 'Helvetica Neue', sans-serif;
                                    font-weight: 700;
                                    font-size: 48px;
                                    letter-spacing: 2px;
                                    text-transform: uppercase;
                                    text-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
                                    line-height: 1.2;
                                    transition: transform 0.3s ease, opacity 0.3s ease;
                                ">
                                Biologi
                            </h1>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- end page title -->
        <!-- start section -->
        <section id="down-section" class="background-position-center-top sm-background-image-none" style="background-image: url('images/vertical-line-bg.svg')">
            <div class="container">
                <div class="row align-items-center justify-content-center mb-8 xs-mb-50px">
                    @if ($tentangBiologi && $tentangBiologi->thumbnail)
                    <div class="col-lg-6 col-md-10 position-relative md-mb-50px sm-mb-30px" data-anime='{ "effect": "slide", "direction": "tb", "color": "#252840", "duration": 1000, "delay": 0 }'>
                        <img class="w-100 border-radius-5px" src="{{ asset('storage/' . $tentangBiologi->thumbnail) }}" alt="">
                    </div>
                    @endif
                    <div class="col-xl-4 offset-lg-1 col-lg-5 col-md-10 text-center text-lg-start" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h3 class="alt-font fw-600 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="1500">Tentang Program Studi <span class="text-highlight fw-800">Biologi<span class="bg-gradient-emerald-blue-emerald-green h-8px bottom-10px opacity-6 separator-animation"></span></span></h3>
                        @if ($tentangBiologi && $tentangBiologi->deskripsi)
                        <p class="mb-35px sm-mb-25px">
                            {!! Str::before($tentangBiologi->deskripsi, '</p>') . '</p>' !!}
                        </p> 
                        @endif
                        <a href="/tentang-biologi" class="btn btn-large btn-round-edge btn-box-shadow" style="background-color: #388E3C; color: white;">
                            <span> 
                                <span class="btn-text">Lihat Selengkapnya</span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            </span>
                        </a>
                    </div> 
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="cover-background" style="background-image: url(images/demo-startup-who-we-are-bg.jpg)">
            <div class="container">
                <div class="row justify-content-center mb-3">
                    <div class="col-lg-7 text-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="1000">Visi <span class="text-highlight fw-800">Misi<span class="bg-gradient-emerald-blue-emerald-green h-8px bottom-10px opacity-6 separator-animation"></span></span> Tujuan</h3>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2 justify-content-center" data-anime='{ "el": "childs", "rotateZ": [5, 0], "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all md-mb-30px">
                        <div class="feature-box bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover justify-content-start border-radius-5px overflow-hidden pt-18 pb-18 ps-14 pe-14 lg-p-12 h-100 last-paragraph-no-margin">
                            <div class="feature-box-icon">
                                <a href="{{ url('/visi-misi-tujuan?tab=visi') }}" class="process-step-icon-link">
                                    <i class="bi bi-chat-quote icon-extra-large text-gradient-emerald-blue-emerald-green mb-20px"></i> 
                                </a>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block alt-font text-dark-gray fw-700 mb-5px fs-26">Visi</span>
                                @if ($visiMisiTujuan && $visiMisiTujuan->visi)
                                    <p class="d-inline-block fs-32 fw-500 text-white mb-5px">{!! $visiMisiTujuan->visi !!}</p>
                                @endif
                            </div>
                            <div class="feature-box-overlay bg-white"></div>
                        </div>  
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all md-mb-30px">
                        <div class="feature-box bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover justify-content-start border-radius-5px overflow-hidden pt-18 pb-18 ps-14 pe-14 lg-p-12 h-100 last-paragraph-no-margin">
                            <div class="feature-box-icon">
                                <a href="{{ url('/visi-misi-tujuan?tab=misi') }}" class="process-step-icon-link">
                                    <i class="bi bi-bar-chart-line icon-extra-large text-gradient-emerald-blue-emerald-green mb-20px"></i> 
                                </a>
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block alt-font text-dark-gray fw-700 mb-5px fs-26">Misi</span>
                                @if ($visiMisiTujuan && is_array($visiMisiTujuan->misi) && count($visiMisiTujuan->misi) > 0)
                                    <p class="w-80 md-w-90 d-inline-block">{!! $visiMisiTujuan->misi[0]['text'] !!}</p>
                                @endif
                            </div>
                            <div class="feature-box-overlay bg-white"></div>
                        </div>  
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col icon-with-text-style-04 transition-inner-all xs-mb-30px">
                        <div class="feature-box bg-white box-shadow-quadruple-large box-shadow-quadruple-large-hover justify-content-start border-radius-5px overflow-hidden pt-18 pb-18 ps-14 pe-14 lg-p-12 h-100 last-paragraph-no-margin">
                            <div class="feature-box-icon">
                                <a href="{{ url('/visi-misi-tujuan?tab=tujuan') }}" class="process-step-icon-link">
                                    <i class="bi bi-megaphone icon-extra-large text-gradient-emerald-blue-emerald-green mb-20px"></i>
                                </a> 
                            </div>
                            <div class="feature-box-content">
                                <span class="d-inline-block alt-font text-dark-gray fw-700 mb-5px fs-26">Tujuan</span>
                                @if ($visiMisiTujuan && is_array($visiMisiTujuan->tujuan) && count($visiMisiTujuan->tujuan) > 0)
                                    <p class="w-80 md-w-90 d-inline-block">{!! $visiMisiTujuan->tujuan[0]['text'] !!}</p>
                                @endif
                            </div>
                            <div class="feature-box-overlay bg-white"></div>
                        </div>  
                    </div>
                    <!-- end features box item -->
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section id="down-section" class="background-position-center-top sm-background-image-none" style="background-image: url('images/vertical-line-bg.svg')">
            <div class="container">
                <div class="row align-items-center justify-content-center mb-8 xs-mb-50px">
                    {{-- Teks dipindah ke kiri --}}
                    <div class="col-xl-4 offset-lg-1 col-lg-5 col-md-10 text-center text-lg-start" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h3 class="alt-font fw-600 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="1500">
                            Kata <span class="text-highlight fw-800">Sambutan
                                <span class="bg-gradient-emerald-blue-emerald-green h-8px bottom-10px opacity-6 separator-animation"></span>
                            </span>
                        </h3>
                        @if ($pimpinanStaff && $pimpinanStaff->kata_sambutan)
                        <p class="section-text">
                            {!! Str::before($pimpinanStaff->kata_sambutan, '</p>') . '</p>' !!}
                        </p>
                        @endif
                        <div class="section-text fs-18 text-dark-gray mt-5px mb-10px">
                            @if ($pimpinanStaff && $pimpinanStaff->kata_sambutan)
                            <span class="fw-600">{!! $pimpinanStaff->nama !!},</span> {!! $pimpinanStaff->status !!}
                            @endif
                        </div>
                        <a href="{{ route('pimpinanStaff.showDetail', $pimpinanStaff->id) }}" class="btn btn-large btn-round-edge btn-box-shadow" style="background-color: #388E3C; color: white;">
                            <span> 
                                <span class="btn-text">Lihat Selengkapnya</span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            </span>
                        </a>
                    </div>

                    {{-- Gambar dipindah ke kanan --}}
                    <div class="col-lg-6 position-relative offset-lg-1">
                        @if ($pimpinanStaff && $pimpinanStaff->foto)
                        <div class="text-end w-80" data-animation-delay="500" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                            <img 
                                src="{{ asset('storage/' . $pimpinanStaff->foto) }}"
                                alt="Foto Pimpinan"
                                class="img-fluid rounded"
                                style="max-width: 250px;"
                            >
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="pb-0">
            <div class="container">
                <div class="row align-items-center mb-4">
                    <div class="col-md-6 text-center text-md-start sm-mb-20px">
                        <h3 class="alt-font fw-600 text-dark-gray ls-minus-1px shadow-none" data-shadow-animation="true" data-animation-delay="1500">
                            Berita <span class="text-highlight fw-800">Terbaru
                                <span class="bg-gradient-emerald-blue-emerald-green h-8px bottom-10px opacity-6 separator-animation"></span>
                            </span>
                        </h3>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <a href="/berita" class="btn btn-large btn-round-edge btn-box-shadow" style="background-color: #388E3C; color: white;">
                            <span> 
                                <span class="btn-text">Jelajahi Semua Berita</span>
                                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            </span>
                        </a>    
                    </div>
                </div>
                <div class="row">
                <div class="col-12">
                    <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        <!-- start blog list -->
                        @foreach ($publikasi->where('status', 'Berita')->sortByDesc('waktu')->take(3) as $item)
                        <li class="grid-item">
                            <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover" style="min-height: 450px; display: flex; flex-direction: column; justify-content: space-between;">
                                <div class="blog-image" style="height: 200px; overflow: hidden;">
                                    @if ($item->gambar)
                                    <a href="{{ route('detail-berita', ['id' => $item->id]) }}'" class="d-block">
                                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="" style="width: 100%; height: 100%; object-fit: cover;" />
                                    </a>
                                    @endif
                                </div>
                                <div class="card-body p-12 lg-p-10" style="flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; padding-bottom: 0;">
                                    @if ($item->judul)
                                    <a href="{{ route('detail-berita', ['id' => $item->id]) }}'" 
                                    class="card-title mb-3 fw-600 fs-20 text-dark-gray d-inline-block" 
                                    style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical;">
                                        {!! Str::limit($item->judul, 90) !!}
                                    </a>
                                    @endif
                                    @if ($item->deskripsi)
                                    <p style="margin-top: 5px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                        {!! Str::limit($item->deskripsi, 120) !!}
                                    </p>
                                    @endif
                                    <div class="d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase mt-auto">
                                        <div class="me-auto">
                                            @if ($item->waktu)
                                            <span class="blog-date d-inline-block fw-600 text-dark-gray">
                                                {{ \Carbon\Carbon::parse($item->waktu)->translatedFormat('d F Y') }}
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        <!-- end blog list -->
                    </ul>
                </div>
            </div>
            </div>
        </section>
        <!-- end section -->
@endsection