<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SeedCategory extends Seeder
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
            DB::table('categories')->insert([
                'name'=>Str::random(10),
                'parent_id'=>'0',
            ]);
        }
    }
}
