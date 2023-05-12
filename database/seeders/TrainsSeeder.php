<?php

namespace Database\Seeders;

use App\Models\Train;
use DateTime;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $generator)
    {
        for ($i = 0; $i < 100; $i++) {
            $newTrain = new Train();

            $newTrain->company = $generator->company();
            $newTrain->departure_station = $generator->city();
            $newTrain->arrival_station = $generator->city();
            $newTrain->departure_time = $generator->dateTimeBetween('-1 month', '+1 month');
            $newTrain->arrival_time = $generator->dateTimeInInterval($newTrain->departure_time, '+12 hours');
            $newTrain->train_code = $generator->regexify('[A-Z]{2}[0-9]{3}[A-Z]{2}');
            $newTrain->carriages_number = $generator->numberBetween(5, 20);
            $newTrain->is_on_time = $generator->numberBetween(0, 1);
            $newTrain->is_cancelled = $generator->numberBetween(0, 1);

            $newTrain->save();
        }
    }
}
