<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SeedPost extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0;$i<20;$i++){
            DB::table('posts')->insert([
                'title'=>Str::random(10),
                'content'=>Str::random(10),
                'author_id'=>'1',
                'image'=>'https://cdn02.static-adayroi.com/0/2016/04/09/1460170571763_5272617.jpg',
            ]);
        }
    }
}
