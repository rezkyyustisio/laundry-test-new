@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Menambah {{ __('Barang') }}</div>

                    <div class="card-body">
<form action="{{ route('barang.store') }}" method="POST"  >
                          @csrf
                            <div class="form-group">
                                <label for="nama">Kode Barang</label>
                                <input type="text" autocomplete="off" name="kodeBarang" class="form-control" id="kodeBarang" placeholder="Kode Barang">
                                @error('kodeBarang')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                              <label for="nohp">Nama Barang</label>
                              <input type="text" autocomplete="off" name="namaBarang" class="form-control" id="nama_member" aria-describedby="namaBarang" placeholder="Nama Barang">

                              @error('namaBarang')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Harga</label>
                                <input type="text" autocomplete="off" name="harga" class="form-control" id="harga" placeholder="Harga">

                                @error('harga')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="nama">Stok</label>
                                <input type="text" autocomplete="off" name="stok" class="form-control" id="stok" placeholder="Stok">

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
