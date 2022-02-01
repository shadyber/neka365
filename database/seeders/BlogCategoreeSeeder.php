<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogCategoreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('blog_categories')->insert([
            'title' => 'Inspiration',
            'icon' => '/assets/images/bg/news.png',
            'slug' => 'inspiration',
        ]);

        \DB::table('blog_categories')->insert([
            'title' => 'Quotes',
            'icon' => '/assets/images/bg/software.png',
            'slug' => 'quots',
        ]);

        \DB::table('blog_categories')->insert([
            'title' => 'Story',
            'icon' => '/assets/images/bg/ia.png',
            'slug' => 'story',
        ]);
    }
}
