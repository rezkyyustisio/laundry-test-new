@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Mengubah {{ __('Laundry') }}</div>

                    <div class="card-body">
<form action="{{ route('laundry.update', ['laundry' => $data->id]) }}" method="POST"  >
                          @csrf
                          @method('PUT')
                          <input type="hidden" name="id" value="{{ $data->id }}">
                          <div class="form-group">
                            <label for="layanan">Layanan</label>
                            <select name="layanan" id="layanan" class="form-control">
                                <option value="">-- Pilih Layanan --</option>
                                @forelse($layanan as $ln)
                                    <option {{ $ln->id == $data->layanan_id ? 'selected' : '' }} value="{{ $ln->id }}">{{ $ln->nama }}</option>
                                @empty 
                                <option value="">Belum Input Layanan</option>
                                @endforelse 
                            </select>

                            @error('layanan')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                            </div>

                            <div class="form-group">
                                <label for="nama">Tanggal Transaksi</label>
                                <input type="date" value="{{ $data->tgl_transaksi }}" name="tanggalTransaksi" class="form-control" id="tanggalTransaksi">
                                @error('tanggalTransaksi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                              <label for="nohp">Nama Customer</label>
                              <input type="text" value="{{ $data->nama_customer }}" autocomplete="off" name="namaCustomer" class="form-control" id="nama_member" aria-describedby="namaCustomer" placeholder="Masukan Nama Customer">

                              @error('durasi')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Nomor Handphone/Whatsapp</label>
                                <input type="text" value="{{ $data->no_telp }}" name="nomorHandphone" class="form-control" id="nomorHandphone">
                                @error('nomorHandphone')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Status Laundry</label>
                                <select name="statusLaundry" id="statusLaundry" class="form-control">
                                    <option value="menunggu" {{ $data->status_laundry == 'menunggu' ? 'active' : '' }}>Menunggu</option>
                                    <option value="diproses" {{ $data->status_laundry == 'diproses' ? 'active' : '' }}>Diproses</option>
                                    <option value="selesai" {{ $data->status_laundry == 'selesai' ? 'active' : '' }}>Selesai</option>
                                </select>
                                @error('tanggalTransaksi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Status Pembayaran</label>
                                <select name="statusPembayaran" id="statusPembayaran" class="form-control">
                                    <option value="belum" {{ $data->status_pembayaran == 'belum' ? 'active' : '' }}>Belum</option>
                                    <option value="bayar" {{ $data->status_pembayaran == 'bayar' ? 'active' : '' }}>Bayar</option>
                                </select>
                                @error('tanggalTransaksi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="6">{{ $data->alamat }}</textarea>
                                @error('harga')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="6">
                                    {{ $data->keterangan }}
                                </textarea>
                                @error('harga')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Lokasi Kirim</label>
                                <textarea name="lokasiKirim" id="lokasiKirim" class="form-control" cols="30" rows="6">
                                    {{ $data->lokasi_kirim }}
                                </textarea>
                                @error('harga')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                              <br/>
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                              </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



<div>

</div>
