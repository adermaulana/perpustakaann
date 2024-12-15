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
                                <form class="row g-3 " action="/admin/kategori/tambah" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">NAMA KATEGORI</label>
                                        <input type="text" class="form-control" name="nama" id="validationDefault01"
                                            value="" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationDefault01" class="form-label">Deskripsi</label>
                                        <textarea class="form-control" name="deskripsi" id="" cols="30" rows="10"></textarea>
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
