<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kader extends Model
{
    use HasFactory;
    protected $table = 'kaders'; // Sesuaikan dengan nama tabel yang telah Anda buat
    protected $primaryKey = 'id_kader';
    protected $fillable = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
    ];
}
