<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $companies = ['Company A', 'Company B', 'Company C'];
        $stations = ['Station 1', 'Station 2', 'Station 3', 'Station 4', 'Station 5'];

        for ($i=0; $i <10 ; $i++) {
            $new_Train = new Train();
            $new_Train->company = $faker->randomElement($companies);
            $new_Train->departure_station = $faker->randomElement($stations);
            $new_Train->arrival_station = $faker->randomElement($stations);
            $new_Train->departure_time = $faker->dateTimeBetween('-1 years', 'now');
            $new_Train->arrival_time = $faker->dateTimeBetween($new_Train->departure_time, '+5 hours');
            $new_Train->train_code = Str::upper(Str::random(3)) . '-' . $faker->randomNumber(3);
            $new_Train->number_of_carriages = $faker->numberBetween(1, 10);
            $new_Train->is_on_time = $faker->boolean;
            $new_Train->is_cancelled = $faker->boolean;
            var_dump($new_Train);
        }
    }
}