<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Tables without Foreign Key
        User::factory(35)->create();
        $this->call(CategorySeeder::class);
        Category::factory(3)->create();

        // Tables with Foreign Key
        Post::factory(20)->create();
        Comment::factory(20)->create();
    }
}
