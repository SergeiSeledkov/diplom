<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            'title' => 'Фильм 1',
            'description' => 'Описание для фильма 1',
            'duration' => 90,
            'country' => 'Россия',
            'poster' => '/poster1.jpg'
        ]);

        DB::table('films')->insert([
            'title' => 'Фильм 2',
            'description' => 'Описание для фильма 2',
            'duration' => 111,
            'country' => 'Германия, Италия',
            'poster' => '/poster2.jpg'
        ]);

        DB::table('films')->insert([
            'title' => 'Фильм 3',
            'description' => 'Описание для фильма 3',
            'duration' => 123,
            'country' => 'Израиль',
            'poster' => '/poster3.jpg'
        ]);
    }
}
