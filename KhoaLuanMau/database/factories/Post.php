<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        //
        'title'=>$faker->title,
        'content'=>$faker->paragraphs(rand(2,10),true),
        'image'=>'Screenshot from 2019-03-31 19-29-04.png',
        'address'=>$faker->address,
        'user_id'=>'1',
        'acreage'=>$faker->numberBetween(20,50),
        'describe'=>$faker->numberBetween(500000,3000000),
        'item'=>$faker->city,
    ];
});
