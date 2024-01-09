<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::create(["name" => "Cairo"]);
        City::create(["name" => "Alex"]);
        City::create(["name" => "Giza"]);
        City::create(["name" => "Fayoum"]);
        City::create(["name" => "Sinai"]);
        City::create(["name" => "Matrouh"]);
        City::create(["name" => "Sahel"]);
        City::create(["name" => "Hurghada"]);
        City::create(["name" => "Sharm"]);
    }
}
