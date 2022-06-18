<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ProCategory extends Model
{
    public static function getCategories() {
	    $allCategories = self::query()->where('type', '=', 'home')->get();
	    $categories = [];
	    foreach ($allCategories as $item) {
		    $categories[] = $item;
	    }
	    return $categories;
    }
}
