@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Data {{ ucwords($data->pegawai->nama_pegawai) }}
            </div>
            <div class="card-body">
                <table class="">
                    <tbody>
                        <tr>
                            <th width="200">Nama Pegawai</th>
                            <td>{{ ucwords($data->pegawai->nama_pegawai) }}</td>
                        </tr>
                        <tr>
                            <th width="200">Tanggal Transaksi</th>
                            <td>{{ date('d-m-Y', strtotime($data->tgl_transaksi)) }}</td>
                        </tr>
                        <tr>
                            <th width="200">Nama Customer</th>
                            <td>{{ ucwords($data->nama_customer) }}</td>
                        </tr>
                        <tr>
                            <th width="200">Nomor Handphone</th>
                            <td>{{ ucwords($data->no_telp) }}</td>
                        </tr>
                        <tr>
                            <th width="200">Status Laundry</th>
                            <td>{{ ucwords($data->status_laundry) }}</td>
                        </tr>
                        <tr>
                            <th width="200">Status Pembayaran</th>
                            <td>{{ ucwords($data->status_pembayaran) }}</td>
                        </tr>
                        <tr>
                            <th width="200">Keterangan</th>
                            <td>{{ ucwords($data->keterangan) }}</td>
                        </tr>
                        <tr>
                            <th width="200">Keterangan</th>
                            <td>{{ ucwords($data->alamat) }}</td>
                        </tr>
                        <tr>
                            <th width="200">Keterangan</th>
                            <td>{{ ucwords($data->lokasi_kirim) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
    </div>
@endsection