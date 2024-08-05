@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Mengubah {{ __('Barang') }}</div>

                    <div class="card-body">
<form action="{{ route('barang.update', ['barang' => $data->id]) }}" method="POST"  >
                          @csrf
                          @method('PUT')
                            <div class="form-group">
                                <label for="nama">Kode Barang</label>
                                <input type="text" value="{{ $data->kode_barang }}" autocomplete="off" name="kodeBarang" class="form-control" id="kodeBarang" placeholder="Kode Barang">
                                @error('kodeBarang')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                              <label for="nohp">Nama Barang</label>
                              <input type="text" value="{{ $data->nama_barang }}" autocomplete="off" name="namaBarang" class="form-control" id="nama_member" aria-describedby="namaBarang" placeholder="Nama Barang">

                              @error('namaBarang')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Harga</label>
                                <input type="text" value="{{ $data->harga }}" autocomplete="off" name="harga" class="form-control" id="harga" placeholder="Harga">

                                @error('harga')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Stok</label>
                                <input type="text" autocomplete="off" value="{{ $data->stok }}" name="stok" class="form-control" id="stok" placeholder="Stok">

                                @error('stok')
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
