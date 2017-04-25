<?php
	require_once 'vendor/fzaninotto/faker/src/autoload.php';
	use Illuminate\Database\Seeder;
	use Faker\Factory as Faker;
	class userTableSeeder extends Seeder{
		public function run(){
      $faker = Faker::create();
			DB::table('users')->truncate();
			foreach (range(1, 10) as $index) {
				DB::table('users')->insert([
          'id' => $index,
          'name' => $faker->name,
          'email' => $faker->email,
          'faculty_id' => $faker->randomNumber,
          'password' => $faker->password,
          'pending' => $faker->numberBetween($min = 0, $max = 1),
          'admin' => $faker->numberBetween($min = 0, $max = 1),
        ]);
      }
    }
  }
