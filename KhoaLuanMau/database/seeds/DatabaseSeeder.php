<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(EventSeed::class);
        $this->call(MeetingSeed::class);
        $this->call(PostSeed::class);
        $this->call(RoomSeed::class);


        //factory('App\Item',10)->create();
    }
}
