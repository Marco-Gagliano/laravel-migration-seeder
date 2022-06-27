<?php

use App\Train;
use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) {
            $new_train = new Train();
            $new_train->company = $faker->name();
            $new_train->departure_station = $faker->city();
            $new_train->finish_station = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->randomNumber(5, 1000);
            $new_train->number_of_carriages = $faker->numberBetween(40, 200);
            $new_train->on_time = $faker->boolean();
            $new_train->is_deleted = $faker->boolean();
            $new_train->save();
        }
    }
}
