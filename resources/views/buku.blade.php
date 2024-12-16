@extends('layouts.main')

@section('container')
    <main class="main">

        <section id="hero" class="hero section dark-background">
            <img src="/home/img/hero-bg-2.jpg" alt="" class="hero-bg">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-12 text-center mb-4" data-aos="fade-in">
                        <h1>Temukan Pengetahuan di <span>Perpustakaan Digital</span> Kami</h1>
                        <p>Jelajahi koleksi buku kami yang beragam</p>
                    </div>

                    <div class="col-12">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            @foreach($buku as $data)
                            <div class="col" data-aos="zoom-in" data-aos-delay="100">
                                <div class="card h-100">
                                    <img src="/{{ $data->gambar }}" class="card-img-top" alt="{{ $data->judul }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $data->judul }}</h5>
                                        <p class="card-text text-dark">{{ $data->deskripsi }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="badge bg-primary">{{ $data->kategori->nama }}</span>
                                            <a href="/detail/{{ $data->judul }}" class="btn btn-sm btn-outline-secondary">Lihat Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28 " preserveAspectRatio="none">
                <defs>
                    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                    </path>
                </defs>
                <g class="wave1">
                    <use xlink:href="#wave-path" x="50" y="3"></use>
                </g>
                <g class="wave2">
                    <use xlink:href="#wave-path" x="50" y="0"></use>
                </g>
                <g class="wave3">
                    <use xlink:href="#wave-path" x="50" y="9"></use>
                </g>
            </svg>
        </section>

    </main>
@endsection
