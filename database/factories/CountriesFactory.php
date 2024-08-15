<?php

namespace Database\Factories;
use App\Models\Continent;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Countries>
 */
class CountriesFactory extends Factory {

	public function definition(): array {
		$continentCount = Continent::count();
		return [
			'name' => $this->faker->country(),
			'continent_id' => fake()->numberBetween(1, Continent::count()),
		];
	}
}
