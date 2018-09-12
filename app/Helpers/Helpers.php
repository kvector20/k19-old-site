<?php


namespace App\Helpers;

// define('ROOT', dirname(__FILE__));

class Helpers
{
    public static function asset($path)
    {
        return PROOT . '/public' . $path;
    }
    
    public static function storage($path)
    {
        return PROOT . '/storage/app/' . $path;
    }
}


