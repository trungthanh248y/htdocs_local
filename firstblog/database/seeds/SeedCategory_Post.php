<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SeedCategory_Post extends Seeder
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
            DB::table('category_post')->insert([
                'post_id'=>rand(1,10),
                'category_id'=>rand(1,10),
            ]);
        }
    }
}
