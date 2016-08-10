<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Address::class, function (Faker\Generator $faker) {
	return [
		'type' => $faker->numberBetween(1,3),
		'companyName' => $faker->company,
		'firstName' => $faker->firstName,
		'lastName' => $faker->lastName,
		'address1' => $faker->streetAddress,
		'city' => $faker->city,
		'postCode' => $faker->postcode,
		'country_id' => $faker->numberBetween(1,253),
		'phone' => $faker->phoneNumber,
		'fax' => $faker->phoneNumber,
		'email' => $faker->safeEmail,
	];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {
	return [
		'firstname' => $faker->firstName,
		'lastname' => $faker->lastName,
		'email' => $faker->email,
		'password' => bcrypt(str_random(10)),
		'remember_token' => str_random(10),
	];
});

$factory->define(App\Warehouse::class, function (Faker\Generator $faker) {
	return [
		'name' => $faker->name,
		'location' => $faker->city,
		'physicalStock' => $faker->randomDigit,
		'sellableStock' => $faker->randomDigit
	];
});