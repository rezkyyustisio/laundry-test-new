@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Data {{ ucwords($data->nama) }}
            </div>
            <div class="card-body">
                <table class="">
                    <tbody>
                        <tr>
                            <th width="200">Nama Layanan</th>
                            <td>{{ ucwords($data->nama) }}</td>
                        </tr>
                        <tr>
                            <th width="200">Durasi</th>
                            <td>{{ ucwords($data->durasi) }}</td>
                        </tr>
                        <tr>
                            <th width="200">Harga</th>
                            <td>{{ "Rp " . number_format($data->harga,0,',','.'); }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
    </div>
@endsection