<?php

namespace Database\Seeders;

use App\Models\Detail;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 2; $i++){
            Detail::create([
                'book_id' => $i,
                'readTime' => 'Long',
                'description' => $faker->sentence(),
                'author' => $faker->name(),
                'body' => $faker->paragraph()
            ]);
        }
        for($i = 3; $i <= 7; $i++){
            Detail::create([
                'book_id' => $i,
                'readTime' => 'Medium',
                'description' => $faker->sentence(),
                'author' => $faker->name(),
                'body' => $faker->paragraph(),
                'video' => 'video.mp4'
            ]);
        }
        for($i = 8; $i <= 10; $i++){
            Detail::create([
                'book_id' => $i,
                'readTime' => 'Quick',
                'description' => $faker->sentence(),
                'author' => $faker->name(),
                'readTime' => 'short',
                'body' => $faker->paragraph()
            ]);
        }
    }
}
