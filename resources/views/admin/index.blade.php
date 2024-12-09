@extends('admin.layouts.main')

@section('container')

<div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col">
                            <div class="h-100">
                                <div class="row mb-3 pb-1">
                                    <div class="col-12">
                                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                            <div class="flex-grow-1">
                                                <h4 class="fs-16 mb-1">DASBOR PERPUSTAKAAN</h4>
                                            </div>
                                        </div><!-- end card header -->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                
                                <div class="col-xl-6 col-md-4">
                                         <a href="/admin/pustakawan" class="">
                                        <div class="card card-height-100">
                                            <div class="card-body">
                                                <div class="mb-4 pb-2">
                                                    <img src="/assets/icon/database.png" alt="" class="avatar-sm">
                                                </div>
                                                    <h6 class="fs-15 fw-semibold">KELOLA AKUN PUSTAKAWAN</h6>
                                                <p class="text-muted mb-0"><i class="ri-user-line align-bottom"></i> Manajemen Staf <span class="ms-2"><i class="ri-library-line align-bottom"></i> Perpustakaan</span></p>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    
                                    <div class="col-xl-6 col-md-4">
                                        <a href="/admin/anggota" class="">
                                                <div class="card card-height-100">
                                                    <div class="card-body">
                                                        <div class="mb-4 pb-2">
                                                            <i class="ri-group-line" style="font-size:50px"></i>
                                                        </div>
                                                            <h6 class="fs-15 fw-semibold">MANAJEMEN ANGGOTA PERPUSTAKAAN</h6>
                                                        <p class="text-muted mb-0"><i class="ri-user-line align-bottom"></i> Data Keanggotaan <span class="ms-2"><i class="ri-library-line align-bottom"></i> Perpustakaan</span></p>
                                                    </div>
                                                </div>
                                        </a>
                                    </div>

                                    <div class="col-xl-6 col-md-4">
                                        <a href="/admin/buku" class="">
                                                <div class="card card-height-100">
                                                    <div class="card-body">
                                                        <div class="mb-4 pb-2">
                                                            <img src="assets/icon/database.png" alt="" class="avatar-sm">
                                                        </div>
                                                            <h6 class="fs-15 fw-semibold">KATALOG DAN INVENTARIS BUKU</h6>
                                                        <p class="text-muted mb-0"><i class="ri-book-line align-bottom"></i> Koleksi Perpustakaan <span class="ms-2"><i class="ri-library-line align-bottom"></i> Perpustakaan</span></p>
                                                    </div>
                                                </div>
                                        </a>
                                    </div>

                                    <div class="col-xl-6 col-md-4">
                                        <a href="/admin/peminjaman" class="">
                                                <div class="card card-height-100">
                                                    <div class="card-body">
                                                        <div class="mb-4 pb-2">
                                                            <img src="assets/icon/database.png" alt="" class="avatar-sm">
                                                        </div>
                                                            <h6 class="fs-15 fw-semibold">TRANSAKSI PEMINJAMAN</h6>
                                                        <p class="text-muted mb-0"><i class="ri-exchange-line align-bottom"></i> Manajemen Sirkulasi <span class="ms-2"><i class="ri-library-line align-bottom"></i> Perpustakaan</span></p>
                                                    </div>
                                                </div>
                                        </a>
                                    </div>

                                </div> 
                                <!-- end row-->

                            </div> <!-- end .h-100-->

                        </div> <!-- end col -->
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

@endsection