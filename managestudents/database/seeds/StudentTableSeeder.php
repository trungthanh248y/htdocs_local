<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
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
            DB::table('students')->insert([
                'username'=>Str::random(10),
                'fullname'=>Str::random(10),
                'address'=>Str::random(10),
                'email'=>Str::random(10).'@gmail.com',
                'groups_id'=>rand(1,5),
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ]);
        }
    }
}
