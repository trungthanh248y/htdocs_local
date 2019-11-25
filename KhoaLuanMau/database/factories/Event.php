<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->name,
        'content'=>'Các bài viết thuộc sư kiện đều được áp dụng trong số ngày quy định',
        'start_time'=>new DateTime,
        'end_time'=>new DateTime,
    ];
});
