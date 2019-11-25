<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
           'name'=>'ThanhPro',
            'email'=>'trungthanh248y@gmail.com',
            'password'=>bcrypt('trungthanh123'),
            'lavel'=>1,
        ]);
    }
}
