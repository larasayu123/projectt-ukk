<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualan'; // Sesuaikan dengan nama tabel yang telah Anda buat
    protected $primaryKey = 'id';
    protected $fillable = [
        'no_jual', 
        'id_sampah',
        'id_user',
        'total',
        'berat',
        'tgl_transaksi',
    ];

    public function sampah()
    {
        return $this->belongsTo(Sampah::class, 'id_sampah', 'id');
    }

    // Definisikan relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
