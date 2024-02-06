<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('adminView.dashboard',[
        'tittle' => 'Dashboard',
        'data' => Warga::paginate(5)]); 
        // Gantilah 'admin.dashboard' dengan nama tampilan Anda
    }

    public function halamandepan()
    {
        return view('wargaView.dashboard');

    }
}
