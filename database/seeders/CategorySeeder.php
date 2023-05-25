<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "category" => "fiction"
        ]);

        Category::create([
            "category" => "horor"
        ]);

        Category::create([
            "category" => "motivation"
        ]);

        Category::create([
            "category" => "romance"
        ]);
    }
}
