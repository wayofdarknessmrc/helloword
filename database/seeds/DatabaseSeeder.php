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
    //   $this->call([
    //        UsersTableSeeder::class,
    //        ProductTableSeeder::class
    //        // CommentsTableSeeder::class,
    //    ]);
        $this->call(\RolesSeeder::class);
        $this->call(\UsersSeeder::class);
        $this->call(\PostsSeeder::class);    
    }
}
