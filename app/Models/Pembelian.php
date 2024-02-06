<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_beli', 
        'id_sampah', 
        'id_warga', 
        'total', 
        'berat', 
        'tgl_transaksi', 
        'keterangan'
    ];

    // Definisikan relasi dengan model Sampah
    public function sampah()
    {
        return $this->belongsTo(Sampah::class, 'id_sampah', 'id');
    }

    // Definisikan relasi dengan model Warga
    public function warga()
    {
        return $this->belongsTo(Warga::class, 'id_warga', 'id_warga');
    }
}
