<?php

namespace App\Http\Controllers\Theme;

use App\Category;
use App\InspirationalQuotes;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    public function index(){

        $posts = Post::orderBy('published_date','DESC')->with('user','tags','categories')->simplePaginate(8);

        $quotes = InspirationalQuotes::get()->random(10);


//        dd($quotes->random(1));

        return view('theme.pages.blog.index',compact('posts','quotes'));
    }

    public function getPost($slug)
    {
        $categories = Category::has('posts')->get();
        $post = Post::with('user','tags','categories')->whereSlug($slug)->firstOrFail();
        $tags = Tag::all();

        $latest_posts = Post::orderBy('published_date','DESC')->where('id','!=',$post->id)->get()->take(5);

        $post_cat_id = $post->categories()->first()->id;


//        $related_posts = Post::wherehas('categories',function($query) use($post_cat_id){
//            $query->where()
//        })->where('id','!=',$post->id)->orderBy('created_at','desc')->get()->take(4);

        return view('theme.pages.blog.single-post',compact('post','categories','tags','latest_posts'));

    }

    public function getCategories($slug){

        $category = Category::where('slug',$slug)->firstorfail();

        $cat_id = $category->id;

        $quotes = InspirationalQuotes::get()->random(10);

        $posts = Post::wherehas('categories',function($query) use ($cat_id){
            $query->where('categories.id',$cat_id);
        })->with('categories')->simplepaginate(8);

        return view('theme.pages.blog.categories',compact('category','posts','quotes'));
    }

    public function getTag($slug){

        $tag = Tag::where('slug',$slug)->firstorfail();

        $tag_id = $tag->id;

        $posts = Post::published()->wherehas('tags',function($query) use ($tag_id){
            $query->where('tags.id',$tag_id);
        })->with('tags')->simplepaginate(8);

        return view('theme.pages.blog.tags',compact('tag','posts'));
    }

    public function quotes(){

    }

}
