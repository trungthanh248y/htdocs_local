<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MeetingSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0;$i<60;$i++){
            $now=Carbon::now();
            DB::table('meetings')->insert([
                'username'=>'Nguyen Trung Thanh',
                'phone'=>'0932806908',
                'time'=>'15h',
                'title'=>'Phòng trọ giá rẻ Tân Xuân',
                'describe'=>'400000',
                'id_post'=>'1',
                'created_at'=>$now->subDays($i),
                'updated_at'=>$now->subDays($i),
            ]);
        }
    }
}
