<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
    use HasFactory;
    protected $table = 'sampah'; // Sesuaikan dengan nama tabel yang telah Anda buat
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_jensam', 
        'nama_sampah',
        'harga_beli',
        'harga_jual',
    ];
}
