@extends('layouts.main')

@section('container')
    <main class="main">

        <section id="hero" class="hero section dark-background">
            <img src="/home/img/hero-bg-2.jpg" alt="" class="hero-bg">

            <div class="container book-detail my-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="book-cover shadow-lg">
                            <img src="/{{ $buku->gambar }}" class="img-fluid rounded" alt="Sampul Buku">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="book-information">
                            <h1 class="mb-3">{{ $buku->judul }}</h1>

                            <div class="book-meta mb-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Informasi Buku</h5>
                                        <ul class="list-unstyled">
                                            <li><strong>Penulis:</strong> {{ $buku->penulis }}</li>
                                            <li><strong>ISBN:</strong> {{ $buku->isbn }}</li>
                                            <li><strong>Penerbit:</strong> {{ $buku->penerbit }}</li>
                                            <li><strong>Tahun Terbit:</strong> {{ $buku->tahun_terbit }}</li>
                                            <li><strong>Kategori:</strong> {{ $buku->kategori->nama }}</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Status Ketersediaan</h5>
                                        <div class="availability-box">
                                            <span class="badge {{ $buku->stok > 0 ? 'bg-success' : 'bg-danger' }}">
                                                {{ $buku->stok }} tersedia
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="book-description">
                                <h5>Deskripsi Buku</h5>
                                <p>
                                    {{$buku->deskripsi}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="book-contact-admin mt-4 p-3 bg-light rounded text-dark">
                    <h5 class="mb-3 text-dark">Ingin Meminjam Buku?</h5>
                    <div class="alert alert-success" role="alert">
                        <i class="bi bi-info-circle me-2"></i>Untuk proses peminjaman buku, silakan hubungi admin
                        perpustakaan.
                    </div>

                    <div class="contact-details">
                        <div class="row">
                            <div class="col-md-6">
                                <h6 class="text-dark">Kontak Admin Perpustakaan</h6>
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="bi bi-telephone me-2"></i>
                                        Telepon: +62 812-4072-4040
                                    </li>
                                    <li>
                                        <i class="bi bi-envelope me-2"></i>
                                        Email: admin.perpustakaan@example.com
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6>Jam Layanan</h6>
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="bi bi-clock me-2"></i>
                                        Senin - Jumat: 08.00 - 16.00 WIB
                                    </li>
                                    <li>
                                        <i class="bi bi-calendar-check me-2"></i>
                                        Sabtu: 09.00 - 12.00 WIB
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="persyaratan mt-3">
                        <h6 class="text-dark">Persyaratan Peminjaman</h6>
                        <ul class="small text-muted">
                            <li>Memiliki kartu anggota perpustakaan aktif</li>
                            <li>Batas peminjaman maks. 3 buku selama 7 hari</li>
                        </ul>
                    </div>

                    <div class="text-center mt-3">
                        <a href="https://wa.me/6281240724040" class="btn btn-success me-2">
                            <i class="bi bi-whatsapp"></i> Hubungi via WhatsApp
                        </a>
                        <a href="mailto:admin.perpustakaan@example.com" class="btn btn-outline-secondary">
                            <i class="bi bi-envelope"></i> Kirim Email
                        </a>
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
