<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Backend\Category;

class PagesController extends Controller
{
    public function index(){
    	$categories = Category::orderBy('name','asc')->get(); 
    	return view('frontend.index', compact('categories'));
    }
}
