<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;
class WargaController extends Controller
{
    public function index()
    {
        $warga = Warga::paginate(10);

        return view('adminView.warga', compact('warga'));
    }

    public function create()
    {
        return view('adminView.wargaCreate');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'no_kk' => 'required',
            'nama_warga' => 'required',
            'alamat_warga' => 'required',
            'no_telp' => 'required',
        ]);

        // Warga::create($request->all());

        // return redirect()->route('warga.index')->with('success', 'Data warga berhasil ditambahkan.');
    
            Warga::create($request->all());
    
            return redirect()->route('warga.index')->with('success', 'Data warga berhasil ditambahkan.');
    }

    public function show(Warga $warga)
    {
        return view('warga.show', compact('warga'));
    }

    public function edit(Warga $warga)
    {
        return view('adminView.wargaEdit', compact('warga'));
    }

    public function update(Request $request, Warga $warga)
    {
            $request->validate([
                'no_kk' => 'required',
                'nama_warga' => 'required',
                'alamat_warga' => 'required',
                'no_telp' => 'required',
            ]);

            $warga->update($request->all());

            // Warga::where('Id_warga', $warga->Id_warga)
            // ->update($request);
    
            return redirect()->route('warga.index')->with('success', 'Data warga berhasil diperbarui.');
    }

    public function destroy(Warga $warga)
    {
        // $warga->delete();
        Warga::destroy($warga->Id_warga);

        return redirect()->route('warga.index')->with('success', 'Data warga berhasil dihapus.');
    }
}