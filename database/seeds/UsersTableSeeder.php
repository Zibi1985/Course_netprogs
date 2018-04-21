<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pl_PL');


	        DB::table('users')->insert([
	        	'name' => 'Zbigniew',
	        	'surname' => 'Gros',
	        	'email' => 'zbigniew.gros@gmail.com',
	        	'password' => bcrypt('test192xy')
        	]);

        for($i=1; $i<=20; $i++)
        {
	        DB::table('users')->insert([
	        	'name' => $faker->firstName,
	        	'surname' => $faker->lastName,
	        	'email' => $faker->email,
	        	'password' => bcrypt('secret')
        	]);

    	}


    }
}
