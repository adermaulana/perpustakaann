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
                                        <h4 class="fs-16 mb-1">TAMBAH DATA BUKU</h4>
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
                                <form class="row g-3 " action="/admin/buku/tambah" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">JUDUL BUKU</label>
                                        <input type="text" class="form-control" name="judul" id="validationDefault01"
                                            value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">NAMA PENULIS</label>
                                        <input type="text" class="form-control" name="penulis" id="validationDefault01"
                                            value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">ISBN</label>
                                        <input type="text" class="form-control" name="isbn" id="validationDefault01"
                                            value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label>KATEGORI</label>
                                        <select class="form-control" name="kategori_id" required>
                                            <option value="" disabled selected>Pilih Kategori</option>
                                            @foreach ($kategori as $data)
                                                <option value="{{ $data->id }}">{{ $data->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">STOK</label>
                                        <input type="number" class="form-control" name="stok" id="validationDefault01"
                                            value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">PENERBIT</label>
                                        <input type="text" class="form-control" name="penerbit" id="validationDefault01"
                                            value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">TAHUN TERBIT</label>
                                        <input type="text" class="form-control" name="tahun_terbit"
                                            id="validationDefault01" value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">GAMBAR SAMPUL</label>
                                        <input type="file" class="form-control" name="gambar" id="validationDefault01"
                                            value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label>STATUS</label>
                                        <select class="form-control" name="status" required>
                                            <option value="" disabled selected>Pilih Status</option>
                                            <option value="tersedia">Tersedia</option>
                                            <option value="tidak tersedia">Tidak Tersedia</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">DESKRIPSI</label>
                                        <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10"></textarea>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="mt-4">
                                    <button class="btn btn-primary" name="simpan" type="submit">SUBMIT</button>
                                    <a class="btn btn-danger" href="/admin/rt" type="reset">BATAL
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
