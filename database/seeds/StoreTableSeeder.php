<?php

use App\Products;
use App\Store;
use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \App\Products::truncate();
//        \App\Store::truncate();

        $faker = \Faker\Factory::create();

        Store::create([
           'name' => $faker->name(),
        ]);
    }
}
