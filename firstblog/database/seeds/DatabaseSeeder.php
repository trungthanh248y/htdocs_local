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
        $this->call(SeedCategory::class);
        $this->call(SeedCategory_Post::class);
        $this->call(SeedPost::class);
    }
}
