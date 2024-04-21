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
            'password' => bcrypt('12345')
        ],);
    }
}
