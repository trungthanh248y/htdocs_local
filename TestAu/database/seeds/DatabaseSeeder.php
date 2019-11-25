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
         $this->call(Started::class);
        $this->call(seedCategoryPost::class);
        factory('App\Category',20)->create();
        factory('App\Post',20)->create();
    }
}
