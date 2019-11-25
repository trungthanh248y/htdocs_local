<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0;$i<40;$i++){
            $now=Carbon::now();
            DB::table('posts')->insert([
                'title'=>'Phòng trọ giá rẻ Tân Xuân',
                'content'=>'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo.
                            Điện nước đầy đủ, internet tốc độ cao, phòng tắm khép kín, camera an ninh, có chỗ để xe
                            . Điện 3,5k 1 số
                            , nước 70K 1 tháng
                            , internet 70k 1 tháng
                            .Thanh toán hàng tháng
                            , Ưu tiên sinh viên, người đi làm lâu dài, ổn định.',
                'image'=>'Screenshot from 2019-03-31 19-29-04.png',
                'user_id'=>'1',
                'address'=>'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội',
                'acreage'=>rand(14,40),
                'describe'=>rand(300000,1000000),
                'sale'=>'250000',
                'created_at'=>$now->subDays($i),
                'updated_at'=>$now->subDays($i),
            ]);
        }
    }
}
