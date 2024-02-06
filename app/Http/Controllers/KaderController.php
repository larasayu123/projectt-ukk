<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kader;
use Illuminate\Http\Request;

class KaderController extends Controller
{
public function index()
    {
        $users = User::paginate(1);

        return view('adminView.kader', compact('users'));
    }

    public function create()
    {
        return view('adminView.kaderCreate');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        // Warga::create($request->all());

        // return redirect()->route('warga.index')->with('success', 'Data warga berhasil ditambahkan.');
    
            Kader::create($request->all());
    
            return redirect()->route('kader.index')->with('success', 'Data kader berhasil ditambahkan.');
    }

    public function show(User $users)
    {
        return view('kader.show', compact('users'));
    }

    public function edit(User $users)
    {
        return view('adminView.kaderEdit', compact('users'));
    }

    public function update(Request $request, User $users)
    {
            $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            ]);

            $users->update($request->all());
            // Warga::where('Id_warga', $users->id)
            // ->update($request);
    
            return redirect()->route('kader.index')->with('success', 'Data kader berhasil diperbarui.');
    }

    public function destroy(User $users)
    {
        // $warga->delete();
        Kader::destroy($users->id);

        return redirect()->route('kader.index')->with('success', 'Data kader berhasil dihapus.');
    }
}