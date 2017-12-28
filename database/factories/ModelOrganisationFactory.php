<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Organisation::class, function (Faker $faker) {
    return [
        'name' => $faker->catchPhrase,
        'detail' => $faker->paragraph,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'address' => $faker->address,
        'phone' => $faker->e164PhoneNumber,
        'email' => $faker->email,
        'longitude' => $faker->longitude,
        'latitude' => $faker->latitude,
        'user_id' => function(){
            return App\User::all()->random();
        },
    ];
});
