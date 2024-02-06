<?php

namespace Database\Seeders;

use App\Models\Jenis_sampah;
use Illuminate\Database\Seeder;


class JensamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenis_sampah = [
            ['id_jensam' => 1, 'nama_sampah' => 'Plastik'],
            ['id_jensam' => 2, 'nama_sampah' => 'Kertas'],
            ['id_jensam' => 3, 'nama_sampah' => 'Kardus'],
            ['id_jensam' => 4, 'nama_sampah' => 'Kaleng Bekas'],
            // Tambahkan jenis sampah lainnya sesuai kebutuhan
        ];

        // Memasukkan data ke dalam database
        Jenis_sampah::insert($jenis_sampah);
    }
}
