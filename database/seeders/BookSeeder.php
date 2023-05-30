<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 0; $i < 10; $i++){
            Book::create([
                'title' => $faker->word(),
                'like' => mt_rand(0,100),
                'image' => $faker->imageUrl(640, 480, 'book', true)
            ]);
        }
    }
}
