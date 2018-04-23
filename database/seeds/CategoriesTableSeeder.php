<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        $categories = [

            [
                'title' => 'Small Business',
                'slug' => slugify('Small Business'),
                'header_img' => '1523445400branding page img'
            ],
            [
                'title' => 'Development',
                'slug' => slugify('Development'),
                'header_img' => '1523445400branding page img'
            ],
            [
                'title' => 'Online Sales',
                'slug' => slugify('Online Sales'),
                'header_img' => '1523445400branding page img'
            ],
            [
                'title' => 'Business Operations',
                'slug' => slugify('Business Operations'),
                'header_img' => '1523445400branding page img'
            ],

        ];

        DB::table('categories')->insert($categories);
    }
}
