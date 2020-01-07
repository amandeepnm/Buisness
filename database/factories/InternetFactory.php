<?php

use Faker\Generator as Faker;

$factory->define(App\Internet::class, function (Faker $faker) {
    return [
        'safeEmail' => $faker->safeEmail,
        'domainName' => $faker->domainName,
        'url' => $faker->url,
        'ipv6' => $faker->ipv6
    ];
});

