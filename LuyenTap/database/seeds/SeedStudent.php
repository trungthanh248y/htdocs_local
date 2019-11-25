<?php

use Illuminate\Database\Seeder;

class SeedStudent extends Seeder
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
            DB::table('students')->insert([
                'email'=>Str::random(10).'@gmail.com',
                'username'=>Str::random(10),
                'password' => bcrypt('secret'),
                'Rows'=>2,
                'employess_id'=>rand(1,10),
            ]);
        }
    }
}
