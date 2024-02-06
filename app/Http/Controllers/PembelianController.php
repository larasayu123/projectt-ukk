<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {
        $pembelian = Pembelian::paginate(10);

        return view('adminView.pembelian', compact('pembelian'));
    }

    public function create()
    {
        return view('adminView.pembelianCreate');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'no_beli'=> 'required',
            'id_sampah' => 'required',
            'id_warga' => 'required',
            'total' => 'required',
            'berat' => 'required',
            'tgl_transaksi' => 'required',
            'keterangan' => 'required',
        ]);

        // Warga::create($request->all());

        // return redirect()->route('warga.index')->with('success', 'Data warga berhasil ditambahkan.');
    
            Pembelian::create($request->all());
    
            return redirect()->route('pembelian.index')->with('success', 'Data pembelian berhasil ditambahkan.');
    }

    public function show(Pembelian $pembelian)
    {
        return view('pembelian.show', compact('pembelian'));
    }

    public function edit(Pembelian $pembelian)
    {
        return view('adminView.pembelianEdit', compact('pembelian'));
    }

    public function update(Request $request, Pembelian $pembelian)
    {
            $request->validate([
            'no_beli'=> 'required',
            'id_sampah' => 'required',
            'id_warga' => 'required',
            'total' => 'required',
            'berat' => 'required',
            'tgl_transaksi' => 'required',
            'keterangan' => 'required',
            ]);

            $pembelian->update($request->all());

            // Warga::where('Id_warga', $warga->Id_warga)
            // ->update($request);
    
            return redirect()->route('pembelian.index')->with('success', 'Data pembelian berhasil diperbarui.');
    }

    public function destroy(Pembelian $pembelian)
    {
        // $warga->delete();
        Pembelian::destroy($pembelian->id);

        return redirect()->route('pembelian.index')->with('success', 'Data pembelian berhasil dihapus.');
    }
}    

