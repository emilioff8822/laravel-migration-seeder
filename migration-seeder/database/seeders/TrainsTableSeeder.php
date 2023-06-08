<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <10 ; $i++) {
            $new_Train = new Train();
            $new_Train->company = $faker->company;
            $new_Train->departure_station = $faker->city;
            $new_Train->arrival_station = $faker->city;
            $new_Train->departure_time = $faker->dateTimeBetween('-1 years', 'now');
            $new_Train->arrival_time = $faker->dateTimeBetween('-1 years', 'now');
            $new_Train->train_code = $faker->bothify('Train-##??');
            $new_Train->number_of_carriages = $faker->numberBetween(1, 10);
            $new_Train->is_on_time = $faker->boolean;
            $new_Train->is_cancelled = $faker->boolean;
            $new_Train->save();
            //var_dump($new_Train);

        }
    }
}