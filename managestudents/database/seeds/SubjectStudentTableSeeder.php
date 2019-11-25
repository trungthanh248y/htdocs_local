<?php

use Illuminate\Database\Seeder;

class SubjectStudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0;$i<10;$i++){
            DB::table('student_subjects')->insert([
                'student_id'=>rand(1,20),
                'subject_id'=>rand(1,20),
            ]);
        }
    }
}
