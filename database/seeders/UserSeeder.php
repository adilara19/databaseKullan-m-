<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->truncate();
        $data = [
            [
                'name' => 'Ayşe Dilara',
                'email' => 'adilaraozturk@gmail.com',
                'password' => bcrypt('84352'),
            ],
            [
                'name' => 'Melisa',
                'email' => 'infome@gmail.com',
                'password' => bcrypt('92645'),
            ],
            [
                'name' => 'Burcu',
                'email' => 'burcucum@gmail.com',
                'password' => bcrypt('73651'),
            ],
            [
                'name' => 'Diğdem',
                'email' => 'digdemguclu@gmail.com',
                'password' => bcrypt('36985'),
            ],
        ];
        User::query()->insert($data);

    }
}
