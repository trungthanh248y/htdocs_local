<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        //
        'title'=>$faker->title,
        'content'=>$faker->sentence(),//paragraphs(rand(2,5),true)
    ];
});
