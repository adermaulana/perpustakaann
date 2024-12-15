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
                                        <h4 class="fs-16 mb-1">TAMBAH DATA ANGGOTA</h4>
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
                                <form class="row g-3 " action="{{ route('edit.anggota', $anggota->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">NOMOR ANGGOTA</label>
                                        <input type="text" class="form-control" value="{{ $anggota->nomor_anggota }}"
                                            readonly style="background-color: #cccccc;" id="validationDefault01"
                                            value="" required>
                                        <input type="hidden" name="nomor_anggota" value="{{ $anggota->nomor_anggota }}">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">NAMA ANGGOTA</label>
                                        <input type="text" class="form-control" name="nama" id="validationDefault01"
                                            value="{{ $anggota->nama }}" required autofocus>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">NOMOR TELEPON</label>
                                        <input type="number" class="form-control" name="telepon" id="validationDefault01"
                                            value="{{ $anggota->telepon }}" required autofocus>
                                    </div>
                                    <div class="col-md-12">
                                        <label>STATUS</label>
                                        <select class="form-control" name="status" required>
                                            <option value="" disabled>Pilih Status</option>
                                            <option value="aktif"
                                                {{ old('status', $anggota->status) == 'aktif' ? 'selected' : '' }}>
                                                Aktif
                                            </option>
                                            <option value="tidak aktif"
                                                {{ old('status', $anggota->status) == 'tidak aktif' ? 'selected' : '' }}>
                                                Tidak Aktif
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">ALAMAT</label>
                                        <textarea class="form-control" name="alamat" id="" cols="30" rows="10">{{ $anggota->alamat }}</textarea>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="mt-4">
                                    <button class="btn btn-primary" name="simpan" type="submit">SUBMIT</button>
                                    <a class="btn btn-danger" href="/admin/anggota" type="reset">BATAL
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
