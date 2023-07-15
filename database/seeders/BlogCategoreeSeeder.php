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
            'title' => 'AI',
            'icon' => '/assets/images/bg/news.png',
            'slug' => 'ai',
        ]);

        \DB::table('blog_categories')->insert([
            'title' => 'Software',
            'icon' => '/assets/images/bg/software.png',
            'slug' => 'software',
        ]);

        \DB::table('blog_categories')->insert([
            'title' => 'News',
            'icon' => '/assets/images/bg/ia.png',
            'slug' => 'news',
        ]);
    }
}
