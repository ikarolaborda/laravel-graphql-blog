<?php

use App\Topic;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::create(['Name' => 'General', 'Slug' => 'general']);
        Topic::create(['Name' => 'Help', 'Slug' => 'help']);
        Topic::create(['Name' => 'Announcements', 'Slug' => 'announcements']);
        Topic::create(['Name' => 'Tips and Tricks', 'Slug' => 'tips-and-tricks']);
        Topic::create(['Name' => 'Tutorials', 'Slug' => 'tutorials']);
        Topic::create(['Name' => 'Packages', 'Slug' => 'packages']);
    }
}
