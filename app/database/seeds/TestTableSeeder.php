<?php

class TestTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('test')->truncate();

		$test = array(
            'id' => 4
		);

		// Uncomment the below to run the seeder
		DB::table('test')->insert($test);
		
// 		Test::create(
//     		array(
//     		'id'	=> 	5,
//     		)
// 		);
	}

}
