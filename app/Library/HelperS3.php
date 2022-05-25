<?php

namespace App\Library;

use Storage;
class HelperS3
{
    /**
     * @param $imageUrl
     * @return string|null
     */
    public static function getPathS3($imageUrl)
    {
        if (Storage::exists('public/' . $imageUrl)) {
            return '/storage' . $imageUrl;
        }
        return null;
    }
}
