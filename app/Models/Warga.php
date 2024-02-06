<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;
    protected $table = 'warga'; // Sesuaikan dengan nama tabel yang telah Anda buat
    protected $primaryKey = 'Id_warga';
    protected $fillable = [
        'no_kk',
        'nama_warga',
        'alamat_warga',
        'no_telp',
    ];
}
