<?php

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pl_PL');
        
        // Dla obiektów
        for($i=1; $i<=100; $i++)
        {
	        DB::table('photos')->insert([
	        	'photoable_type' => 'App\Hotel',
	        	'photoable_id' => $faker->numberBetween(1,10),
	        	'path' => $faker->imageUrl(800,400, 'city'),
        	]);
    	}

        // Dla pokoju
        for($i=1; $i<=200; $i++)
        {
	        DB::table('photos')->insert([
	        	'photoable_type' => 'App\Room',
	        	'photoable_id' => $faker->numberBetween(1,10),
	        	'path' => $faker->imageUrl(800,400, 'nightlife'),
        	]);

    	}

        // Dla uzytkownikow
        for($i=1; $i<=20; $i++)
        {
	        DB::table('photos')->insert([
	        	'photoable_type' => 'App\User',
	        	'photoable_id' => $i,
	        	'path' => $faker->imageUrl(800,400, 'people'),
        	]);

    	}


    }
}
