<?php

use Illuminate\Database\Seeder;

class SeedEmploy extends Seeder
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
            DB::table('employess')->insert([
                'name_employess'=>Str::random(10),
                'Rows'=>1,
            ]);
        }
    }
}
