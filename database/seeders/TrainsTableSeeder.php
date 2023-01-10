<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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

        for($i=0; $i < 30; $i++){
            $new_train = new Train();
            $new_train->operator = $faker->word();
            $new_train->arriving_from = $faker->city();
            $new_train->destination = $faker->city();
            $new_train->departure = $faker->time();
            $new_train->arrival = $faker->time();
            $new_train->train_number = $faker->bothify('??####');
            $new_train->car_number = $faker->randomDigitNotNull();
            $new_train->on_time = $faker->boolean();
            $new_train->is_cancelled = $faker->boolean();
            $new_train->save();

        }


    }
}
