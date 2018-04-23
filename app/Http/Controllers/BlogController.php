<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index(){

        $posts = Post::published()->with('author','tags','categories')->simplePaginate(8);
        return view('pages.blog.index',compact('posts'));
    }

    public function getPost($slug)
    {
        $categories = Category::has('posts')->get();
        $tags = Tag::all();
        $post = Post::published()->with('author','tags','categories')->whereSlug($slug)->firstOrFail();

        $latest_posts = Post::published()->orderBy('published_date','DESC')->where('id','!=',$post->id)->get()->take(5);

        $post_cat_id = $post->categories()->first()->id;

        $related_posts = Post::published()->wherehas('categories',function($query) use($post_cat_id){
            $query->where('categories.id',$post_cat_id);
        })->where('id','!=',$post->id)->orderBy('created_at','desc')->get()->take(4);

        return view('pages.blog.post',compact('post','categories','related_posts','tags','latest_posts'));

    }

    public function getCategories($slug){

        $category = Category::where('slug',$slug)->firstorfail();

        $cat_id = $category->id;

        $posts = Post::published()->wherehas('categories',function($query) use ($cat_id){
            $query->where('categories.id',$cat_id);
        })->with('categories')->simplepaginate(8);

        return view('pages.blog.categories',compact('category','posts'));
    }

    public function getTags($slug){
        return view('pages.blog.tags');
    }

}
