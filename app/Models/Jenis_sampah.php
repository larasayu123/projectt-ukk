<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_sampah extends Model
{
    use HasFactory;
    protected $table = 'jenis_sampah'; // Sesuaikan dengan nama tabel yang telah Anda buat
    protected $primaryKey = 'id_jensam';
    protected $fillable = [
        'nama_sampah',
    ];
}
