<?php

namespace App\Http\Controllers;

use App\Models\Sampah;
use Illuminate\Http\Request;

class SampahController extends Controller
{
    public function index()
    {
        $sampah = Sampah::paginate(10);

        return view('adminView.sampah', compact('sampah'));
    }

    public function create()
    {
        return view('adminView.sampahCreate');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
           'id_jensam'  => 'required',
           'nama_sampah'=> 'required',
           'harga_beli' => 'required',
           'harga_jual' => 'required',
        ]);

        // Warga::create($request->all());

        // return redirect()->route('warga.index')->with('success', 'Data warga berhasil ditambahkan.');
    
            Sampah::create($request->all());
    
            return redirect()->route('sampah.index')->with('success', 'Data sampah berhasil ditambahkan.');
    }

    public function show(Sampah $sampah)
    {
        return view('sampah.show', compact('sampah'));
    }

    public function edit(Sampah $sampah)
    {
        return view('adminView.sampahEdit', compact('sampah'));
    }

    public function update(Request $request, Sampah $sampah)
    {
            $request->validate([
                'id_jensam'  => 'required',
                'nama_sampah'=> 'required',
                'harga_beli' => 'required',
                'harga_jual' => 'required',
            ]);

            $sampah->update($request->all());

            // Warga::where('Id_warga', $warga->Id_warga)
            // ->update($request);
    
            return redirect()->route('sampah.index')->with('success', 'Data sampah berhasil diperbarui.');
    }

    public function destroy(Sampah $sampah)
    {
        // $warga->delete();
        Sampah::destroy($sampah->id);

        return redirect()->route('sampah.index')->with('success', 'Data sampah berhasil dihapus.');
    }
}
