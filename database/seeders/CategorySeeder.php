<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Category::factory(5)->create();

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'UI/UX',
            'slug' => 'ui-ux'
        ]);

        Category::create([
            'name' => 'System Administrator',
            'slug' => 'system-administrator'
        ]);

        Category::create([
            'name' => 'Full Stack Developer',
            'slug' => 'full-stack-developer'
        ]);

        Category::create([
            'name' => 'Content Creator',
            'slug' => 'content-creator'
        ]);
    }
}
