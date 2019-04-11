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

        $categories = [

            [
                'title' => 'Small Business',
                'slug' => slugify('Small Business'),
                'header_img' => '1523445400branding page img',
                'subtext' => 'Posts around all things Small Business'
            ],
            [
                'title' => 'Development',
                'slug' => slugify('Development'),
                'header_img' => '1523445400branding page img',
                'subtext' => 'Development articles and information'
            ],
            [
                'title' => 'Online Sales',
                'slug' => slugify('Online Sales'),
                'header_img' => '1523445400branding page img',
                'subtext' => 'Digital selling tips and tricks'
            ],
            [
                'title' => 'Business Operations',
                'slug' => slugify('Business Operations'),
                'header_img' => '1523445400branding page img',
                'subtext' => 'Optimize your business and operations'
            ],

        ];

        DB::table('categories')->insert($categories);
    }
}
