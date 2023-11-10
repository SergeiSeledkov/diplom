<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CinemaHallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cinema_halls')->insert([
            'name' => 'Зал 1',
            'row' => 4,
            'chair' => 3,
            'price_standard' => 350,
            'price_vip' => 375,
            'free' => true
        ]);

        DB::table('cinema_halls')->insert([
            'name' => 'Зал 2',
            'row' => 6,
            'chair' => 4,
            'price_standard' => 200,
            'price_vip' => 300,
            'free' => true
        ]);

        DB::table('cinema_halls')->insert([
            'name' => 'Зал 3',
            'row' => 9,
            'chair' => 2,
            'price_standard' => 100,
            'price_vip' => 200,
            'free' => true
        ]);

        DB::table('cinema_halls')->insert([
            'name' => 'Зал 4',
            'row' => 5,
            'chair' => 5,
            'price_standard' => 100,
            'price_vip' => 300,
            'free' => true
        ]);

        DB::table('cinema_halls')->insert([
            'name' => 'Зал 5',
            'row' => 3,
            'chair' => 10,
            'price_standard' => 550,
            'price_vip' => 650,
            'free' => true
        ]);

        DB::table('cinema_halls')->insert([
            'name' => 'Зал 6',
            'row' => 9,
            'chair' => 10,
            'price_standard' => 900,
            'price_vip' => 1000,
            'free' => true
        ]);
    }
}
