<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

        User::create([
            'name'      => 'Khoirul Afwan',
            'username'  => 'khoirul.afwan',
            'email'     => 'khoirul@mail.com',
            'password'  => bcrypt('123')
        ]);
        \App\Models\User::factory(2)->create();

        Category::create([
            'name'      => 'Mobile Progaming',
            'slug'      => 'mobile-progaming'
        ]);
        Category::create([
            'name'      => 'Food Review',
            'slug'      => 'food-review'
        ]);
        Category::create([
            'name'      => 'Android Tips',
            'slug'      => 'android-tips'
        ]);
        Category::create([
            'name'      => 'Technology',
            'slug'      => 'technology'
        ]);
        Category::create([
            'name'      => 'Graphic Design',
            'slug'      => 'graphic-design'
        ]);
        Post::factory(20)->create();
    }
}
