<?php

use Illuminate\Database\Seeder;

class LikeablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pl_PL');
        
        for($i=1; $i<=60; $i++)
        {
	        DB::table('likeables')->insert([
	        	'likeable_type' => $faker->randomElement(['App\Object', 'App\Article']),
	        	'likeable_id' => $faker->numberBetween(1,10),
	        	'user_id' => $faker->numberBetween(1,10),
        	]);

    	}

    }
}
