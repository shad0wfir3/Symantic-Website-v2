<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('services')->truncate();


        $services = [
            [
                'name' => 'Brand Marketing & Strategy',
                'icon' => 'icon-Target-Market',
                'short_description' => "Increase your brand's reputation through engagement and marketing campaigns.",
                'content' => 'content to come here',
                'featured_img' => 'cloudinary featured img',
                'page_img' => 'cloudinary page image here',
                'request_type' => 'contact',
                'slug' => 'branding-marketing-and-strategy',
                'breakdown_services' => json_encode([
                    'count' => '3',
                    [
                        'icon' => 'icon_here',
                        'name' => 'Name here'
                    ],
                    [
                        'icon' => 'icon_2 here',
                        'name' => 'name 2 here'
                    ],
                    [
                        'icon' => 'icon_3 here',
                        'name' => 'name_3 here'
                    ]
                ]),
                'status' => 'published'
            ],
            [
                'name' => 'UX & Graphic Design',
                'icon' => 'icon-Target-Market',
                'short_description' => "Professional full service design solutions for your business.",
                'content' => 'content to come here',
                'featured_img' => 'cloudinary featured img',
                'page_img' => 'cloudinary page image here',
                'request_type' => 'contact',
                'slug' => 'ux-and-graphic-design',
                'breakdown_services' => json_encode([
                    'count' => '3',
                    [
                        'icon' => 'icon_here',
                        'name' => 'Name here'
                    ],
                    [
                        'icon' => 'icon_2 here',
                        'name' => 'name 2 here'
                    ],
                    [
                        'icon' => 'icon_3 here',
                        'name' => 'name_3 here'
                    ]
                ]),
                'status' => 'draft'

            ]
        ];

        DB::table('services')->insert($services);
    }
}
