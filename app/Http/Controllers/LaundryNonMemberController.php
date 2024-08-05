<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use App\Models\LaundryNonMember;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\LaundryNonMember as Laundry;

class LaundryNonMemberController extends Controller
{
   public function index(){
      $data = Laundry::latest()->paginate(10);
      return view('laundry.index', compact('data'));
   }
   public function create()
    {
        $layanan = Laundry::all();
        return view('laundry.create', compact('layanan'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'layanan' => 'required',
            'tanggalTransaksi' => 'required',
            'namaCustomer' => 'required',
            'nomorHandphone' => 'required',
            'statusLaundry' => 'required',
            'statusPembayaran' => 'required',
            'alamat' => 'required',
            'keterangan' => 'required',
            'lokasiKirim' => 'required',
        ]);

        $simpanlaundry = new LaundryNonMember();
        $simpanlaundry->pegawai_id = Auth::user()->pegawai->id;
        $simpanlaundry->layanan_id = $request->layanan;
        $simpanlaundry->tgl_transaksi = $request->tanggalTransaksi;
        $simpanlaundry->nama_customer = $request->namaCustomer;
        $simpanlaundry->alamat = $request->alamat;
        $simpanlaundry->no_telp = $request->nomorHandphone;
        $simpanlaundry->keterangan = $request->keterangan;
        $simpanlaundry->status_laundry = $request->statusLaundry;
        $simpanlaundry->status_pembayaran = $request->statusPembayaran;
        $simpanlaundry->lokasi_kirim = $request->lokasiKirim;
        $simpanlaundry->save();

        //redirect to index
        return redirect()->route('laundry.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function edit($id)
    {
        $data = Laundry::where('id', $id)->first();
        $layanan = Layanan::all();
        return view('laundry.edit', compact('data', 'layanan'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'layanan' => 'required',
            'tanggalTransaksi' => 'required',
            'namaCustomer' => 'required',
            'nomorHandphone' => 'required',
            'statusLaundry' => 'required',
            'statusPembayaran' => 'required',
            'alamat' => 'required',
            'keterangan' => 'required',
            'lokasiKirim' => 'required',
        ]);

        $simpanlaundry = Laundry::find($request->id);
        $simpanlaundry->pegawai_id = Auth::user()->pegawai->id;
        $simpanlaundry->layanan_id = $request->layanan;
        $simpanlaundry->tgl_transaksi = $request->tanggalTransaksi;
        $simpanlaundry->nama_customer = $request->namaCustomer;
        $simpanlaundry->alamat = $request->alamat;
        $simpanlaundry->no_telp = $request->nomorHandphone;
        $simpanlaundry->keterangan = $request->keterangan;
        $simpanlaundry->status_laundry = $request->statusLaundry;
        $simpanlaundry->status_pembayaran = $request->statusPembayaran;
        $simpanlaundry->lokasi_kirim = $request->lokasiKirim;
        $simpanlaundry->save();

        //redirect to index
        return redirect()->route('laundry.index')->with(['success' => 'Data Berhasil Disimpan!']);

        return redirect()->route('laundry.index');
    }
    public function destroy($id)
    {
        $data = Laundry::find($id);
        $data->delete();
        return redirect()->route('laundry.index')->with(['success', 'Data Berhasil Dihapus!']);
    }
    public function show($id)
    {
        $data = Laundry::find($id);
        return view('laundry.show', compact('data'));
    }
}
