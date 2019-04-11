<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(PostsTableSeeder::class);
         $this->call(TagsTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(CategoriesPostsTableSeeder::class);
         $this->call(PostsTagsTableSeeder::class);
         $this->call(QuoteTableSeeder::class);
    }
}
