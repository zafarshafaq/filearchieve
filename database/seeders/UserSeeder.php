<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'hakkma',
            'email' => 'hakima@unionaid.org',
            'phone' => '0747043094',
            'position' => 'IT Assistant',
            'password' => bcrypt('test'),
            'type' => 'administrator'
        ]);




    }
}
