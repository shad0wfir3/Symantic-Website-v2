<?php
/**
 * Created by shad0wfir3.
 * Symantic Creative
 * Created: 2018/04/11 | 15:20
 */

use JD\Cloudder\Facades\Cloudder;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

if (!function_exists('get_cl_img')) {
    function get_cl_img($public_id, $options = [])
    {
        $image = Cloudder::show($public_id,$options);
        return $image;
    }
}

if(!function_exists('truncate_headings')){
    function truncate_headings($text, $chars = 30) {
        if (strlen($text) <= $chars) {
            return $text;
        }
        $text = $text." ";
        $text = substr($text,0,$chars);
        $text = substr($text,0,strrpos($text,' '));
        $text = $text."...";
        return $text;
    }
}

if(!function_exists('truncate_paragraph')){
    function truncate_paragraph($text, $chars = 100) {
        if (strlen($text) <= $chars) {
            return $text;
        }
        $text = $text." ";
        $text = substr($text,0,$chars);
        $text = substr($text,0,strrpos($text,' '));
        $text = $text."...";
        return $text;
    }
}

if(!function_exists('slugify')){
    function slugify($text){

            // replace non letter or digits by -
            $text = preg_replace('~[^\pL\d]+~u', '-', $text);

            // transliterate
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

            // remove unwanted characters
            $text = preg_replace('~[^-\w]+~', '', $text);

            // trim
            $text = trim($text, '-');

            // remove duplicate -
            $text = preg_replace('~-+~', '-', $text);

            // lowercase
            $text = strtolower($text);

            if (empty($text)) {
                return 'n-a';
            }

            return $text;
    }
}

if(!function_exists('presentable_date')){
    function presentable_date($date){

        $returned_date = date("d F Y",strtotime($date));

        return $returned_date;
    }
}

if(!function_exists('storage_image')){
    function storage_image($image){
        $image_path = Storage::disk('spaces')->url($image);
        return $image_path;
    }
}




