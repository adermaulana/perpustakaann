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
                                        <h4 class="fs-16 mb-1">TAMBAH DATA KATEGORI</h4>
                                    </div>
                                </div><!-- end card header -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row--> <!-- end row-->

                    </div> <!-- end .h-100-->

                </div> <!-- end col -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- <p class="text-muted">Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? All good, you can use the browser defaults. Try submitting the form below. Depending on your browser and OS, you’ll see a slightly different style of feedback.While these feedback styles cannot be styled with CSS, you can still customize the feedback text through JavaScript.</p> -->

                            <div class="live-preview">
                                <form class="row g-3 " action="/admin/peminjaman/tambah" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12">
                                        <label>JUDUL BUKU</label>
                                        <select class="form-control" name="id_buku" required>
                                            <option value="" disabled selected>Pilih Buku</option>
                                            @foreach ($buku as $data)
                                                <option value="{{ $data->id }}">{{ $data->judul }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label>NAMA ANGGOTA</label>
                                        <select class="form-control" name="id_anggota" required>
                                            <option value="" disabled selected>Pilih Anggota</option>
                                            @foreach ($anggota as $data)
                                                <option value="{{ $data->id }}">{{ $data->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="tanggal_pinjam" class="form-label">TANGGAL PINJAM</label>
                                        <input type="date" class="form-control" name="tanggal_pinjam" id="validationDefault01"
                                            value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="tanggal_pinjam" class="form-label">TANGGAL RENCANA PENGEMBALIAN</label>
                                        <input type="date" class="form-control" name="tanggal_rencana_pengembalian" id="validationDefault01"
                                             required>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="mt-4">
                                    <button class="btn btn-primary" name="simpan" type="submit">SUBMIT</button>
                                    <a class="btn btn-danger" href="/admin/kategori" type="reset">BATAL
                                    </a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div>
    <!-- container-fluid -->
    </div>
@endsection
