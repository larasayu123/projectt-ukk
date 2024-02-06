<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Kader;
use Illuminate\Database\Seeder;
use Database\Seeders\JensamSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::create([
            'name' => 'kaderku',
            // 'level' => 'kader',
            'email' => 'kaderku@gmail.com',
            'password' =>  bcrypt('kader123'),
        ]);

        Kader::create([
            'name' => 'wargaku',
            // 'level' => 'kader',
            'email' => 'wargaku@gmail.com',
            'password' =>  bcrypt('warga123'),
        ]);

        $this->call(JensamSeeder::class);
    }
}
