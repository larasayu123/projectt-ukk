<?php

namespace App\Http\Controllers;

use App\Models\Jenis_sampah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JensamController extends Controller
{
    public function index()
    {
        $jenis_sampah = Jenis_sampah::paginate(10);

        return view('adminView.jensam', compact('jenis_sampah'));
    }

    public function create()
    {
        return view('adminView.jensamCreate');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'id_jensam' => 'required',
            'nama_sampah' => 'required',
        ]);

        // Warga::create($request->all());

        // return redirect()->route('warga.index')->with('success', 'Data warga berhasil ditambahkan.');
    
            Jenis_sampah::create($request->all());
    
            return redirect()->route('jenis_sampah.index')->with('success', 'Data jenis sampah berhasil ditambahkan.');
    }

    public function show(Jenis_sampah $jenis_sampah)
    {
        return view('jenis_sampah.show', compact('jenis_sampah'));
    }

    public function edit(Jenis_sampah $jenis_sampah)
    {
        return view('adminView.jensamEdit', compact('jenis_sampah'));
    }

    public function update(Request $request, Jenis_sampah $jenis_sampah)
    {
            $request->validate([
                'id_jensam' => 'required',
                'nama_warga' => 'required',
            ]);

            $jenis_sampah->update($request->all());

            // Warga::where('Id_warga', $warga->Id_warga)
            // ->update($request);
    
            return redirect()->route('jenis_sampah.index')->with('success', 'Data jenis sampah berhasil diperbarui.');
    }

    public function destroy(Jenis_sampah $jenis_sampah)
    {
        // $warga->delete();
        Jenis_sampah::destroy($jenis_sampah ->id_jensam);

        return redirect()->route('jenis_sampah.index')->with('success', 'Data jenis sampah berhasil dihapus.');
    }
}
