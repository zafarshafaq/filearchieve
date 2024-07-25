<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sectore;

class SectoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        Sectore::create([
            'name' => 'Health',
        ]);



    }
}
