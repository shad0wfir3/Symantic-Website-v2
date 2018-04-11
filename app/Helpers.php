<?php
/**
 * Created by shad0wfir3.
 * Symantic Creative
 * Created: 2018/04/11 | 15:20
 */

use JD\Cloudder\Facades\Cloudder;

if (!function_exists('get_cl_img')) {
    /**
     * Returns a human readable file size
     *
     * @param integer $bytes
     * Bytes contains the size of the bytes to convert
     *
     * @param integer $decimals
     * Number of decimal places to be returned
     *
     * @return string a string in human readable format
     *
     * */
    function get_cl_img($public_id, $options = [])
    {
        $image = Cloudder::show($public_id,$options);
        return $image;
    }
}

