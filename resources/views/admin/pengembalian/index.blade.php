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
                                        <h4 class="fs-16 mb-1">PENGEMBALIAN</h4>
                                    </div>
                                </div><!-- end card header -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="example"
                                            class="table table-bordered dt-responsive table-striped align-middle"
                                            style="width: 100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul Buku</th>
                                                    <th>Nama Anggota</th>
                                                    <th>Tanggal Pinjam</th>
                                                    <th>Tanggal Rencana Kembali</th>
                                                    <th>Tanggal Kembali</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($peminjaman as $data)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $data->buku->judul }}</td>
                                                        <td>{{ $data->anggota->nama }}</td>
                                                        <td>{{ $data->tanggal_pinjam }}</td>
                                                        <td>{{ $data->tanggal_rencana_pengembalian }}</td>
                                                        @if ($data->tanggal_kembali)
                                                            <td>{{ $data->tanggal_kembali }}</td>
                                                        @else
                                                            <td><span class="badge bg-danger">Buku belum dikembalikan</span>
                                                            </td>
                                                        @endif
                                                        @if ($data->status == 'dipinjam')
                                                            <td><span class="badge bg-warning">Dipinjam</span></td>
                                                        @else
                                                            <td><span class="badge bg-success">Dikembalikan</span></td>
                                                        @endif
                                                        <td>
                                                            <div class="d-flex flex-wrap gap-2">
                                                                @if ($data->status == 'dipinjam')
                                                                    <button type="button"
                                                                        class="btn btn-success btn-sm" data-bs-toggle="modal"
                                                                        data-bs-target="#returnModal{{ $data->id }}">Kembalikan
                                                                    </button>
                                                                @endif
                                                                @if ($data->status == 'dikembalikan')
                                                                    <form
                                                                        action="/admin/pengembalian/{{ $data->id }}/delete"
                                                                        method="post">
                                                                        @method('delete')
                                                                        @csrf
                                                                        <button type="submit" href=""
                                                                            onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"
                                                                            class="btn btn-danger waves-effect waves-light">Hapus</button>
                                                                    </form>
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <div class="modal fade" id="returnModal{{ $data->id }}"
                                                        tabindex="-1" aria-labelledby="returnModalLabel{{ $data->id }}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="returnModalLabel{{ $data->id }}">Konfirmasi
                                                                        Pengembalian Buku</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <form action="/admin/pengembalian/{{ $data->id }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="modal-body">
                                                                        <p>Apakah Anda yakin ingin mengembalikan buku
                                                                            <strong>{{ $data->buku->judul }}</strong>?
                                                                        </p>
                                                                        <div class="mb-3">
                                                                            <label for="tanggal_kembali"
                                                                                class="form-label">Tanggal
                                                                                Pengembalian</label>
                                                                            <input type="date" class="form-control"
                                                                                id="tanggal_kembali" name="tanggal_kembali"
                                                                                value="{{ date('Y-m-d') }}" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Batal</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Konfirmasi
                                                                            Pengembalian</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
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
