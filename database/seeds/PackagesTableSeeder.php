<?php

use Illuminate\Database\Seeder;
use FakerGenerator\Faker;
use App\PackageModel;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $Faker)
    {    
        for($i = 1; $i < 4; $i++) {
        // Create a new package
        $new_package = new PackageModel();

        $new_package->destination = $faker->city();
        $new_package->nights = $faker->randomDigitNotNull();
        $new_package->breakfast_included = $faker->boolean();
        $new_package->price = $faker->randomFloat(2, 100, 999999);

        $new_package->save();
        }
    }
}
