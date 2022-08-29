<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\PackageModel;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {    
        for($i = 1; $i < 4; $i++) {
            // Create a new package
            $new_package = new PackageModel();

            $new_package->destination = $faker->country();
            $new_package->nights = $faker->randomDigitNotNull();
            $new_package->breakfast_included = $faker->boolean();
            $new_package->price = $faker->randomFloat(2, 999, 4999);

            $new_package->save();
        }
    }
}
