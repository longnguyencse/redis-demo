<?php

use App\Products;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Products::truncate();
        $faker = \Faker\Factory::create();
        // error_log("aa");
        for ($i=0; $i < 9000; $i++) {
            Products::create([
                'store_id' =>$faker->numberBetween(1,5),
                'name' => $faker->name(),
                'weight' => $faker->randomFloat(10, 0, 1000),
                'price' => $faker->randomFloat(10, 0, 1000),
                'fast_ship' => $faker->numberBetween(0,1),
                'time_bq' => $faker->numberBetween(1,60)

            ]);
        }
    }
}
