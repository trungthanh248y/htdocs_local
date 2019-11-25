<?php

use Illuminate\Database\Seeder;

class post_item extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0;$i<10;$i++){
            DB::table('post_item')->insert([
                'post_id'=>rand(1,10),
                'item_id'=>rand(1,10),
            ]);
        }
    }
}
