<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use App\Models\ProCategory;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function show() {
    	return view('market.home', [
    	    'pictures'   => Picture::getpictures(),
    	    'banner'     => Picture::getBannerFirst(),
    	    'categories' => ProCategory::getCategories()
    	]);
    }
    
    public function categories($category) {
    	return view('market.catalog');
    }
}
