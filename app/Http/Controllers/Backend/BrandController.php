<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Models\Backend\Brand;
use Image; 
use File;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::orderBy('id', 'desc')->get();
        return view('backend.pages.brand.manage', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.brand.create');
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
            'name.required' => 'Please Insert a Brand name'
        ]);

        // store brand in db 

        $brand = new Brand();
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);
        $brand->description = $request->description;

        if( $request->image ){
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/brand/'. $img );
            Image::make($image)->save($location);
            $brand->image = $img;
        }

        $brand->save();

        //write flash message 
        session()->flash( 'Success' , 'Brand Created Successfully ');
        return redirect()->route('manageBrand');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand, $id)
    {
        $brand = Brand::find($id);

        if( !is_null($brand) ){
            return view( 'backend.pages.brand.edit', compact('brand') );
        }else{
            session()->flash( 'Error' , 'Page Not Found');
            return redirect()->route('manageBrand');
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand, $id)
    {
        $request->validate([
            'name'  => 'required|max:255',
        ],[
            'name.required' => 'Please Insert a Brand name',
        ]);

        // store brand in db 

        $brand = Brand::find($id);
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);
        $brand->description = $request->description;
        if( $request->image ){

            // Delete existing image if any
            if( File::exists( 'images/brand/'. $brand->image )){
                File::delete( 'images/brand/'. $brand->image );
            }

            // Upload new Image
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/brand/'. $img );
            Image::make($image)->save($location);
            $brand->image = $img;
        }

        $brand->save();

        //write flash message 
        session()->flash( 'Success' , 'Brand Updated Successfully ');
        return redirect()->route('manageBrand');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand, $id)
    {
        $brand = Brand::find( $id );

       
        if( !is_null($brand) )
        {

            // delete the brand and their image with locations
            if( File::exists( 'images/brand/'. $brand->image ))
            {
                File::delete( 'images/brand/'. $brand->image );
            }

            $brand->delete();   
        }

        session()->flash( 'Success' , 'Brand Deleted Successfully ');
        return redirect()->route('manageBrand');
         
    }
}
