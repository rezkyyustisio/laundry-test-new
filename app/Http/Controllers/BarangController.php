<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Models\PembelianBarang;
use Illuminate\Routing\Controller;

class BarangController extends Controller
{
    public function index()
    {
        $data = Barang::latest()->paginate(10);
        return view('barang.index', compact('data'));
    }
    public function create()
    {
        return view('barang.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'kodeBarang' => 'required',
            'namaBarang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        $data = new Barang;
        $data->kode_barang = $request->kodeBarang;
        $data->nama_barang = $request->namaBarang;
        $data->harga = $request->harga; 
        $data->stok = $request->stok; 
        $data->save();

        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function edit($id)
    {
        $data = Barang::find($id);
        return view('barang.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'kodeBarang' => 'required',
            'namaBarang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);
        $data = Barang::find($id);
        $data->kode_barang = $request->kodeBarang;
        $data->nama_barang = $request->namaBarang;
        $data->harga = $request->harga; 
        $data->stok = $request->stok; 
        $data->save();

        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function destroy($id)
    {
        $data = Barang::find($id)->delete();
        return redirect()->route('barang.index')->with(['success', 'Data Berhasil Dihapus!']);
    }
    public function show($id)
    {
        $data = Barang::find($id);
        return view('barang.show', compact('data'));
    }
}
