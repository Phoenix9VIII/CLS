<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            "name" => "LG OLED B3 77 inch 4K Smart TV 2023",
            "description" => "A smarter viewing experience with the a7 AI Processor 4K Gen6",
            "cost" => 10000,
            "price" => 13500,
            "stock" => 5,
            "category_id" => 1,
        ]);

        Product::create([
            "name" => "iPhone 15 Pro",
            "description" => "Titanium.So strong. So light. So Pro.Enter A17 Pro.Game-changing chip. Groundbreaking performance.",
            "cost" => 90000,
            "price" => 95000,
            "stock" => 15,
            "category_id" => 1,
        ]);

        Product::create([
            "name" => "Foldable Solar Panel",
            "description" => "Foldable solar panels are gaining traction as people look for an easy, sustainable way to juice up their devices when off the grid. Although compact solar panels have been around for a while, the new foldable variety offers more convenience and flexibility.",
            "cost" => 15000,
            "price" => 20000,
            "stock" => 10,
            "category_id" => 2,
        ]);

        Product::create([
            "name" => "D70",
            "description" => "The Brand New Camera ",
            "cost" => 5000,
            "price" => 9000,
            "stock" => 5,
            "category_id" => 3,
        ]);
    }
}
