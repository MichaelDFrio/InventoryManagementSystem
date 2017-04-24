<?php
	require_once 'vendor/fzaninotto/faker/src/autoload.php';
	use Illuminate\Database\Seeder;
	use Faker\Factory as Faker;
	class inventoryTableSeeder extends Seeder{
		public function run(){
      $faker = Faker::create();
			DB::table('inventory')->truncate();
			foreach (range(1, 10) as $index) {
				DB::table('inventory')->insert([
          'inv_id' => $index,
          'name' => $faker->randomElement($array = array('laptop', 'iPad', 'PRS', 'Web Cam')),
          'current_stock' => $faker->numberBetween($min = 0, $max = 10),
          'max_stock' => $faker->numberBetween($min = 10, $max = 10),
        ]);
      }
    }
  }
