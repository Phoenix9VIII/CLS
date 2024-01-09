<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(["name" => "Cameras"]);
        Category::create(["name" => "Tvs"]);
        Category::create(["name" => "Mobilephones"]);
        Category::create(["name" => "Others"]);
    }
}
