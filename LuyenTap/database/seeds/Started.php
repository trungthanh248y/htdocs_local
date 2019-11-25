<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class Started extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=1;$i<30;$i++){
            // Để vào trong vòn lặp thì dữ liệu random chỉ trong vòng năm nay(năm 2019)
            $now=Carbon::now();

            DB::table('starteds')->insert([
                'value'=>rand(85,120),
                'created_at'=>$now->subDays($i),
                'updated_at'=>$now->subDays($i),
            ]);
        }
    }
}
