<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(CategorySeed::class);

        $faker = Faker::create();
        foreach (range(1,50) as $index) {
            DB::table('authors')->insert([
                'name' => $faker->name,
            ]);
        }

        foreach (range(1,50) as $index) {
            DB::table('books')->insert([
                'title' => $faker->realText(50, 1),
                'year' => $faker->year,
                'category_id' => $faker->numberBetween(1,4)
            ]);
        }

        foreach (range(1, 50) as $index) {
            DB::table('author_book')->insert([
                'book_id' => $index,
                'author_id' => $faker->numberBetween(1, 50),
            ]);
        }
        foreach (range(51, 60) as $index) {
            DB::table('author_book')->insert([
                'book_id' => $faker->numberBetween(1, 50),
                'author_id' => $faker->numberBetween(1, 50),
            ]);
        }
    }
}
