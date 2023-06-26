<?php

use Illuminate\Database\Seeder;
use App\Topic;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(TopicSeeder::class);
        $this->call(PostSeeder::class);
    }
}
