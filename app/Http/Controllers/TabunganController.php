<?php

namespace App\Http\Controllers;

use App\Models\Tabungan;
use Illuminate\Http\Request;

class TabunganController extends Controller
{
    public function index()
    {
        $tabungan = Tabungan::paginate(10);

        return view('adminView.tabungan', compact('tabungan'));
    }

    public function create()
    {
        return view('adminView.tabunganCreate');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
           'Id_warga' => 'required',
           'saldo'=> 'required',
           'keterangan' => 'required',
        ]);

        // Warga::create($request->all());

        // return redirect()->route('warga.index')->with('success', 'Data warga berhasil ditambahkan.');
    
            Tabungan::create($request->all());
    
            return redirect()->route('tabunagn.index')->with('success', 'Data tabungan berhasil ditambahkan.');
    }

    public function show(Tabungan $tabungan)
    {
        return view('tabungan.show', compact('tabungan'));
    }

    public function edit(Tabungan $tabungan)
    {
        return view('adminView.tabunganEdit', compact('tabungan'));
    }

    public function update(Request $request, Tabungan $tabungan)
    {
            $request->validate([
                'Id_warga' => 'required',
                'saldo'=> 'required',
                'keterangan' => 'required',
            ]);

            $tabungan->update($request->all());

            // Warga::where('Id_warga', $warga->Id_warga)
            // ->update($request);
    
            return redirect()->route('tabungan.index')->with('success', 'Data tabungan berhasil diperbarui.');
    }

    public function destroy(Tabungan $tabungan)
    {
        // $warga->delete();
        Tabungan::destroy($tabungan->id);

        return redirect()->route('tabungan.index')->with('success', 'Data tabungan berhasil dihapus.');
    }

}
