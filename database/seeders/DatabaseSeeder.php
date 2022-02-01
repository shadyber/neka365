<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
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
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory(10)->create();
        $this->call(AdminSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RolePermissionSeeder::class);
       // $this->call(UserRoleSeeder::class);

        $this->call(BlogCategoreeSeeder::class);
        $this->call(UserRoleSeeder::class);

        \App\Models\User::factory(3)->create();
        \App\Models\Blog::factory(10)->create();
    }
}
