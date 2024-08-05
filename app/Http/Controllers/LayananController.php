<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Member;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class LayananController extends Controller
{
    public function index()
    {
        $data = Layanan::latest()->paginate(10);
        return view('layanan.index', compact('data'));
    }
    public function create()
    {
        return view('layanan.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'namalayanan' => 'required',
            'durasi' => 'required',
            'harga' => 'required'
        ]);

        $simpanlayanan = new Layanan();
        $simpanlayanan->nama = $request->namalayanan;
        $simpanlayanan->durasi = $request->durasi;
        $simpanlayanan->harga = $request->harga;
        $simpanlayanan->save();

        //redirect to index
        return redirect()->route('layanan.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function edit($id)
    {
        $data = Layanan::where('id', $id)->first();
        return view('layanan.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'namalayanan' => 'required',
            'durasi' => 'required',
            'harga' => 'required'
        ]);

        $simpanlayanana = Layanan::find($id);
        $simpanlayanana->nama = $request->namalayanan;
        $simpanlayanana->durasi = $request->durasi;
        $simpanlayanana->harga = $request->harga;
        $simpanlayanana->save();

        //redirect to index
        return redirect()->route('layanan.index')->with(['success' => 'Data Berhasil Disimpan!']);

        return redirect()->route('layanan.index');
    }
    public function destroy($id)
    {
        $data = Layanan::find($id);
        $data->delete();
        return redirect()->route('layanan.index')->with(['success', 'Data Berhasil Dihapus!']);
    }
    public function show($id)
    {
        $data = Layanan::find($id);
        return view('layanan.show', compact('data'));
    }
}
