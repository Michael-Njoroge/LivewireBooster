<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Continent;
use App\Models\Countries;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 */
	public function run(): void {
		$continents = [
			['name' => 'Africa'],
			['name' => 'Asia'],
			['name' => 'Europe'],
			['name' => 'North America'],
			['name' => 'South America'],
			['name' => 'Australia'],
			['name' => 'Antarctica'],
		];

		foreach ($continents as $continent) {
			$createdContinent = Continent::create($continent);
			$createdContinent->countries()->saveMany(Countries::factory(10)->make());
		}

		Product::factory(150)->create();
	}
}
