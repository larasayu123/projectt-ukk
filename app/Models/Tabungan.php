<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    use HasFactory;
    protected $table = 'tabungan';

    protected $primaryKey = 'id_tabungan';

    protected $fillable = [
        'Id_warga', 
        'saldo', 
        'keterangan'
    ];

    // Definisikan relasi dengan model Warga
    public function warga()
    {
        return $this->belongsTo(Warga::class, 'Id_warga', 'Id_warga');
    }
}
