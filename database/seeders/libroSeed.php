<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class libroSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'type'=>'libro',
            'category_id'=>1,
            'title'=>'libro de la selva',
            'original_title'=>'libro de la jungla',
            'publisher'=>'publicador',
            'publication_date'=>"2024-06-08",
            'pages'=>50,
            'country'=>'paris',
            'author_id'=>2]);
            Book::create([
                'type'=>'cuento',
                'category_id'=>2,
                'title'=>'cuentos de ayer y hoy',
                'original_title'=>'cuentos del dia a dia',
                'publisher'=>'repartidor',
                'publication_date'=>"2022-06-08",
                'pages'=>510,
                'country'=>'alla',
                'author_id'=>1]);
    }
}
