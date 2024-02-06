<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = Penjualan::paginate(10);

        return view('adminView.penjualan', compact('penjualan'));
    }

    public function create()
    {
        return view('adminView.penjualanCreate');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'no_jual'=> 'required',
            'id_sampah' => 'required',
            'id_user' => 'required',
            'total' => 'required',
            'berat' => 'required',
            'tgl_transaksi' => 'required',
        ]);

        // Warga::create($request->all());

        // return redirect()->route('warga.index')->with('success', 'Data warga berhasil ditambahkan.');
    
            Pemjualan::create($request->all());
    
            return redirect()->route('penjualan.index')->with('success', 'Data penjualan berhasil ditambahkan.');
    }

    public function show(Penjualan $penjualan)
    {
        return view('penjualan.show', compact('penjualan'));
    }

    public function edit(Penjualan $penjualan)
    {
        return view('adminView.penjualanEdit', compact('penjualan'));
    }

    public function update(Request $request, Penjualan $penjualan)
    {
            $request->validate([
                'no_jual'=> 'required',
                'id_sampah' => 'required',
                'id_user' => 'required',
                'total' => 'required',
                'berat' => 'required',
                'tgl_transaksi' => 'required',
            ]);

            $penjualan->update($request->all());

            // Warga::where('Id_warga', $warga->Id_warga)
            // ->update($request);
    
            return redirect()->route('penjualan.index')->with('success', 'Data penjualan berhasil diperbarui.');
    }

    public function destroy(Penjualan $penjualan)
    {
        // $warga->delete();
        Penjualan::destroy($penjualan->id);

        return redirect()->route('penjualan.index')->with('success', 'Data penjualan berhasil dihapus.');
    }

}
