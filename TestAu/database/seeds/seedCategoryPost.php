<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seedCategoryPost extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0;$i<10;$i++){
            DB::table('category_post')->insert([
                'category_id'=>rand(1,20),
                'post_id'=>rand(1,20),
            ]);
        }
    }
}
