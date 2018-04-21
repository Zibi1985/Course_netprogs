<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pl_PL');

        for($i=1; $i<=20; $i++)
        {
            DB::table('hotels')->insert([
                'name' => $faker->unique()->word,
                'description' =>$faker->text(1000),
                'user_id' => $faker->numberBetween(1,20),
                'city_id' => $faker->numberBetween(1,20),
            ]);

        }
    }
}

