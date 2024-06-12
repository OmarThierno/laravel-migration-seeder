<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // $newTrain = new Train();
        // $newTrain->agency = 'Treni Italia';
        // $newTrain->departure_station = 'Milano';
        // $newTrain->arrival_station = 'Venezia';
        // $newTrain->departure_time = "20:00:00";
        // $newTrain->arrival_time = "00:00:00";
        // $newTrain->train_code = "HDJF0006";

        for($i = 0; $i < 10; $i++) {
            // with Faker
            $newTrain = new Train();

            $newTrain->agency = $faker->name();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->dateTimeBetween('-1 week', 'now');
            $newTrain->arrival_time = $faker->dateTimeBetween('now', '+1 week');
            $newTrain->train_code = $faker->randomElement(['AAA', 'BBB', 'CCC', 'DDD', 'EEE', 'FFF']) . $faker->randomNumber(5, true);
    
            $newTrain->save();

        }
    }
}
