<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;
    
    public static function getPictures() {
	    $pictures = Picture::query()
		    ->where('category', '=', 'banner')
		    ->get();
		    
	    $images = [];
		   
	    foreach ($pictures as $piture) {
		    $images[] = $piture->image;
	    }
	    
	    
	    return $images;
    }
    
    public static function getBannerFirst() {
	    $banner = Picture::query()->where('category', '=', 'banner2')
		    ->select('image')
		    ->first();
		    
	    return $banner->image;
    }
}
