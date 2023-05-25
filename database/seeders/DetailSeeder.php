<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Detail;
use Faker\Factory as Faker;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create("id_ID");

        for($i=1; $i<11; $i++){

            Detail::create([
                // "book_id" => "B".$i,
                "book_id" => $i,
                "author" => $faker->name(),
                "publisher" => $faker->company(),
                "year" => $faker->year(),
                "description" => $faker->paragraph()
            ]);
        }
    }
}
