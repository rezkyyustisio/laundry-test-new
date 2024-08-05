@extends('layouts.app')
@push('stylesheet')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush
@section('content')
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title">Laundry</h3>
                    <a href="{{ route('laundry.create') }}"> <span class="fas fa-plus"></span>Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <table id="tabledata" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Nama Pegawai</th>
                            <th>Tanggal Transaksi</th>
                            <th>Nama Customer</th>
                            <th>Nomor Handphone</th>
                            <th>Status Laundry</th>
                            <th>Status Pembayaran</th>
                            <th>Keterangan</th>
                            <th>Alamat</th>
                            <th>Lokasi Kirim</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $laundry)
                            <tr>
                                <td class="text-center">
                                    {{ ++$index }}
                                </td>
                                <td>{{ $laundry->pegawai->nama_pegawai }}</td>
                                <td>{{ date('d-m-Y', strtotime($laundry->tgl_transaksi)) }}</td>
                                <td>{{ $laundry->nama_customer }}</td>
                                <td>{{ $laundry->no_telp }}</td>
                                <td>{{ $laundry->status_laundry }}</td>
                                <td>{{ $laundry->status_pembayaran }}</td>
                                <td>{{ $laundry->keterangan }}</td>
                                <td>{{ $laundry->alamat }}</td>
                                <td>{{ $laundry->lokasi_kirim }}</td>
                                <td>
                                     <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('laundry.destroy', $laundry->id) }}" method="POST">
                                                <a href="{{ route('laundry.show', $laundry->id) }}"
                                                    class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('laundry.edit', $laundry->id) }}"
                                                    class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->
    </section>
@endsection
@push('scripts')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    <script>
        $(function() {
            $('#tabledata').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
