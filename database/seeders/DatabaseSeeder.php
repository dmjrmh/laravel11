<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Category::create([
        //     'name' => 'UI/UX',
        //     'slug' => 'ui-ux'
        // ]);

        // Post::create([
        //     'title' => 'Article 1',
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'article-1',
        //     'description' => 'Laravel includes the ability to seed your database with data using seed classes. All seed classes are stored in the database/seeders directory. By default, a DatabaseSeeder class is defined for you. From this class, you may use the call method to run other seed classes, allowing you to control the seeding order.'
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);

        Post::factory(50)->recycle([
            Category::all(),
            User::all(),
        ])->create();
    }
}
