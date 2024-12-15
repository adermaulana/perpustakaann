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
                                        <h4 class="fs-16 mb-1">MEMBUAT DATA BUKU</h4>
                                    </div>
                                </div><!-- end card header -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header d-flex align-items-center">
                                        <h5 class="card-title mb-0 flex-grow-1">Tambah Data</h5>
                                        <div>
                                            <a href="/admin/buku/tambah" class="btn btn-primary">
                                                Tambah Data
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table id="example"
                                            class="table table-bordered dt-responsive table-striped align-middle"
                                            style="width: 100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul Buku</th>
                                                    <th>Penulis</th>
                                                    <th>ISBN</th>
                                                    <th>Kategori</th>
                                                    <th>Stok</th>
                                                    <th>Penerbit</th>
                                                    <th>Tahun Terbit</th>
                                                    <th>Gambar</th>
                                                    <th>Deskripsi</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($buku as $data)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $data->judul }} </td>
                                                        <td>{{ $data->penulis }} </td>
                                                        <td>{{ $data->isbn }} </td>
                                                        <td>{{ $data->kategori->nama }} </td>
                                                        <td>{{ $data->stok }} </td>
                                                        <td>{{ $data->penerbit }} </td>
                                                        <td>{{ $data->tahun_terbit }} </td>
                                                        <td><a target="_blank" href="/{{ $data->gambar }}"><img
                                                                    class="img-fluid" width="100"
                                                                    src="/{{ $data->gambar }}" alt="Foto Cover"></a>
                                                        </td>
                                                        <td>{{ $data->deskripsi }} </td>
                                                        <td>{{ $data->status }} </td>
                                                        <td>
                                                            <div class="d-flex flex-wrap gap-2">
                                                                <a type="button"
                                                                    href="/admin/buku/{{ $data->id }}/edit"
                                                                    class="btn btn-warning waves-effect waves-light">Edit</a>
                                                                <form action="/admin/buku/{{ $data->id }}/delete"
                                                                    method="post">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <button type="submit" href=""
                                                                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"
                                                                        class="btn btn-danger waves-effect waves-light">Hapus</button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row-->
                    </div> <!-- end .h-100-->

                </div> <!-- end col -->
            </div>

        </div>
    </div>
@endsection
