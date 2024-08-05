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
                    <h3 class="card-title">Barang</h3>
                    <a href="{{ route('barang.create') }}"> <span class="fas fa-plus"></span>Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <table id="tabledata" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $barang)
                            <tr>
                                <td class="text-center">
                                    {{ ++$index }}
                                </td>
                                <td>{{ $barang->kode_barang }}</td>
                                <td>{{ $barang->nama_barang }}</td>
                                <td> {{ "Rp " . number_format($barang->harga,0,',','.'); }}</td>
                                <td>{{ $barang->stok }}</td>
                                <td>
                                     <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('barang.destroy', $barang->id) }}" method="POST">
                                                <a href="{{ route('barang.show', $barang->id) }}"
                                                    class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('barang.edit', $barang->id) }}"
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
