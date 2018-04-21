<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
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
	        DB::table('addresses')->insert([
	        	'number' => $faker->numberBetween(1,20),
	        	'street' => $faker->streetName,
	        	'object_id' => $faker->unique()->numberBetween(1,20),
        	]);

    	}


    }
}
