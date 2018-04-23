<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts_tags')->truncate();

        $posts = \App\Post::all();
        $tags = \App\Tag::all()->random(4);

        foreach($posts as $post){
            foreach($tags as $tag){
                $data = [
                    'post_id' => $post->id,
                    'tag_id' => $tag->id
                ];
                DB::table('posts_tags')->insert($data);
            }
        }

    }
}
