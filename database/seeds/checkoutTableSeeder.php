<?php
	require_once 'vendor/fzaninotto/faker/src/autoload.php';
	use Illuminate\Database\Seeder;
	use Faker\Factory as Faker;
	class checkoutTableSeeder extends Seeder{
		public function run(){
      $faker = Faker::create();
			DB::table('checkout')->truncate();
			foreach (range(1, 10) as $index) {
				DB::table('checkout')->insert([
          'co_id' => $index,
          'u_id' => $index,
          'inv_id' => $index,
          'pickup_date' => $faker->date($format = 'm-d-Y', $min = 'now'),
          'established_return_date' =>$faker->date($format = 'm-d-Y', $min = 'now'),
          'quantity' =>$faker->numberBetween($min = 0, $max = 10),
          'actual_return_date' =>$faker->date($format = 'm-d-Y', $min = 'now'),
          'status' =>$faker->numberBetween($min = 0, $max = 5),
          'condition' =>$faker->randomElement($array = array('Excellent', 'Good', 'Bad', 'Broken')),
          'comments' =>$faker->text($maxNbChar=100),
          'cetl_user_auth' =>$index,
          'cetl_user_check_in' =>$index,
        ]);
      }
    }
  }
