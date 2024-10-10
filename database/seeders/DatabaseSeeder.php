<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Yiyin Noriyah Putri',
            'username' => 'yiyinnp',
            'email' => 'yiyin19202@gmail.com',
            'level' => 'siswa',
            'password' => bcrypt('12345'),
            'kelas' => 'RPL 1'
        ]);
        \App\Models\User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'yiyinnoriyahp@gmail.com',
            'level' => 'admin',
            'password' => bcrypt('S%i%j_L_wM,UM!5')
        ]);
        
    }
}
