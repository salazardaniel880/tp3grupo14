<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class aurhorSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name'=>'jose luis',
            'nationality'=>'london',
            'birth_date'=>'2000-06-08'
        ]);
        Author::create([
            'name'=>'ramon antonio',
            'nationality'=>'argentina',
            'birth_date'=>'2004-07-20'
        ]);
        Author::create([
            'name'=>'maria jose',
            'nationality'=>'gringolandia',
            'birth_date'=>'2008-02-10'
        ]);
    }
}
