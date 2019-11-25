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
        $this->call(SeedEmploy::class);
        $this->call(SeedStudent::class);
        $this->call(post_item::class);
        factory(App\Post::class,10)->create();
        factory(App\Item::class,10)->create();
    }
}
