<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Backend\Category;
use App\Models\Backend\Brand;

class PagesController extends Controller
{
    public function index(){
    	$brands = Brand::all(); 
    	$categories = Category::where('parent_id', 0)->get()->random(6); 
    	return view('frontend.index', compact('categories', 'brands'));
    }
}
