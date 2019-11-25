<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0;$i<5;$i++){
            $now=Carbon::now();
            DB::table('events')->insert([
                'name'=>'Sale 20%',
                'content'=>'Các bài viết thuộc sư kiện đều được áp dụng trong số ngày quy định',
                'start_time'=>new DateTime,
                'end_time'=>new DateTime,
                'created_at'=>$now->subDays($i),
                'updated_at'=>$now->subDays($i),
            ]);
        }
    }
}
