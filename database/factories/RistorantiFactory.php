<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ristorante;
use Faker\Generator as Faker;

$factory->define(Ristorante::class, function (Faker $faker) {
    return [
           'name' => $faker -> streetSuffix(),
           'city'=> $faker ->city(),
           'postcode'=>$faker ->postcode(),
           'address'=>$faker ->address(),
           'rating'=>$faker ->randomNumber(1),
           'telephone'=>$faker ->phoneNumber(),
           'email'=>$faker ->email(),
           'owner'=>$faker ->name(),
           'description'=>$faker ->text()
    ];
});
