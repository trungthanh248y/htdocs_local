<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RoomSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0;$i<30;$i++){
            $now=Carbon::now();
            DB::table('rooms')->insert([
                'title'=>'Phòng trọ giá rẻ Tân Xuân',
                'content'=>'Có sân phơi rộng rãi, khép kín, an ninh đảm bảo
                            Điện nước đầy đủ, internet tốc độ cao, Phòng tắm khép kín, camera an ninh, chỗ để xe
                            điện 3,5k 1 số
                            nước 70K 1 tháng
                            internet 70k 1 tháng
                            Thanh toán hàng tháng
                            Ưu tiên sinh viên, người đi làm lâu dài, ổn định.',
                'image'=>'Screenshot from 2019-03-31 19-29-04.png',
                'admin_id'=>'1',
                'address'=>'Số 20 Tân Xuân, Xuân Mai, Chương Mỹ, Hà Nội',
                'acreage'=>rand(14,40),
                'describe'=>rand(300000,1000000),
                'created_at'=>$now->subDays($i),
                'updated_at'=>$now->subDays($i),
            ]);
        }
    }
}
