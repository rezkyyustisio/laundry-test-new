@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Menambah {{ __('Laundry') }}</div>

                    <div class="card-body">
<form action="{{ route('laundry.store') }}" method="POST"  >
                          @csrf
                          <div class="form-group">
                            <label for="layanan">Layanan</label>
                            <select name="layanan" id="layanan" class="form-control">
                                <option value="">-- Pilih Layanan --</option>
                                @forelse($layanan as $ln)
                                    <option value="{{ $ln->id }}">{{ $ln->nama }}</option>
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
                                <input type="date" name="tanggalTransaksi" class="form-control" id="tanggalTransaksi">
                                @error('tanggalTransaksi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                              <label for="namaCustomer">Nama Customer</label>
                              <input type="text" autocomplete="off" name="namaCustomer" class="form-control" id="nama_member" aria-describedby="namaCustomer" placeholder="Masukan Nama Customer">

                              @error('durasi')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Nomor Handphone/Whatsapp</label>
                                <input type="text" placeholder="Masukan Nomor Handphone/Whatsapp" name="nomorHandphone" class="form-control" id="nomorHandphone">
                                @error('nomorHandphone')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Status Laundry</label>
                                <select name="statusLaundry" id="statusLaundry" class="form-control">
                                    <option value="menunggu">Menunggu</option>
                                    <option value="diproses">Diproses</option>
                                    <option value="selesai">Selesai</option>
                                </select>
                                @error('statusLaundry')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Status Pembayaran</label>
                                <select name="statusPembayaran" id="statusPembayaran" class="form-control">
                                    <option value="belum">Belum</option>
                                    <option value="bayar">Bayar</option>
                                </select>
                                @error('statusPembayaran')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="4"></textarea>
                                @error('alamat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="4"></textarea>
                                @error('keterangan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Lokasi Kirim</label>
                                <textarea name="lokasiKirim" id="lokasiKirim" class="form-control" cols="30" rows="4"></textarea>
                                @error('lokasiKirim')
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
