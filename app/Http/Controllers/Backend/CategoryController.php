<?php

namespace App\Http\Controllers\Backend;

use App\Models\Backend\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

use Image; 
use File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('backend.pages.category.manage', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_categories = Category::orderBy('name', 'asc')->where('parent_id', 0)->get();
        return view('backend.pages.category.create', compact('parent_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|max:255',
        ],[
            'name.required' => 'Please Insert a Category name'
        ]);

        // store category in db 

        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;

        if( $request->image ){
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/category/'. $img );
            Image::make($image)->save($location);
            $category->image = $img;
        }

        // echo "<pre>";
        // print_r($category);
        // echo "<pre/>";

        $category->save();

        //write flash message 
        session()->flash( 'Success' , 'Category Created Successfully ');
        return redirect()->route('manageCategory');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, $id)
    {
        $parent_categories = Category::orderBy('name', 'asc')->where('parent_id', 0)->get();

        $category = Category::find($id);

        if( !is_null($category) ){
            return view('backend.pages.category.edit', compact('category', 'parent_categories'));
        }else{
            session()->flash( 'Error' , 'Page Not Found');
            return route('manageCategory');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, $id)
    {
        $request->validate([
            'name'  => 'required|max:255',
        ],[
            'name.required' => 'Please Insert a Category name',
        ]);

        // store category in db 

        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;

        if( $request->image ){

            // Delete existing image if any
            if( File::exists( 'images/category/'. $category->image )){
                File::delete( 'images/category/'. $category->image );
            }

            // Upload new Image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/category/'. $img );
            Image::make($image)->save($location);
            $category->image = $img;
        }

        $category->save();

        //write flash message 
        session()->flash( 'Success' , 'Category Updated Successfully ');
        return redirect()->route('manageCategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id)
    {
        $category = Category::find( $id );

       
        if( !is_null($category) )
        {
            if( $category->parent_id == 0 )
            {
                $sub_cats = Category::orderBy('name', 'asc')->where('parent_id', $category->id)->get();

                foreach ($sub_cats as $sub_cat) 
                {
                     // first delete all it's child category and their image with locations 
                    if( File::exists( 'images/category/'. $sub_cat->image ))
                    {
                        File::delete( 'images/category/'. $sub_cat->image );
                    }

                    $sub_cat->delete();                    
                }
            }

            // then delete the primary category and their image with locations
            if( File::exists( 'images/category/'. $category->image ))
            {
                File::delete( 'images/category/'. $category->image );
            }

            $category->delete();   
            session()->flash( 'Success' , 'Category Deleted Successfully ');
        }


        return redirect()->route('manageCategory');
         
    }
}
