<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Tao 10 truong
        for ($i = 0; $i <= 10; $i++) {
            DB::table('students')->insert([
                'username' => Str::random(10),
                'firstname' => Str::random(10),
                'lastname' => Str::random(10),
                'address' => Str::random(10),
                'Created_at'=>date('Y-m-d H:i:s'),
                'Updated_at'=>date('Y-m-d H:i:s'),
            ]);
        }
    }
}
