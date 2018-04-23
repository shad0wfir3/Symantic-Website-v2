<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories_posts')->truncate();

        $relation = [
            [
                'post_id' => 1,
                'category_id' => 1
            ],[
                'post_id' => 2,
                'category_id' => 1
            ],[
                'post_id' => 3,
                'category_id' => 1
            ],[
                'post_id' => 4,
                'category_id' => 1
            ],[
                'post_id' => 5,
                'category_id' => 1
            ],[
                'post_id' => 6,
                'category_id' => 1
            ],[
                'post_id' => 7,
                'category_id' => 1
            ],[
                'post_id' => 8,
                'category_id' => 2
            ],[
                'post_id' => 9,
                'category_id' => 2
            ],[
                'post_id' => 10,
                'category_id' => 2
            ],[
                'post_id' => 11,
                'category_id' => 3
            ],[
                'post_id' => 12,
                'category_id' => 3
            ],[
                'post_id' => 13,
                'category_id' => 3
            ],[
                'post_id' => 14,
                'category_id' => 3
            ],[
                'post_id' => 15,
                'category_id' => 3
            ],[
                'post_id' => 16,
                'category_id' => 3
            ],[
                'post_id' => 17,
                'category_id' => 4
            ],[
                'post_id' => 18,
                'category_id' => 4
            ],[
                'post_id' => 19,
                'category_id' => 4
            ],[
                'post_id' => 20,
                'category_id' => 4
            ],[
                'post_id' => 21,
                'category_id' => 4
            ],

        ];

        DB::table('categories_posts')->insert($relation);
    }
}
