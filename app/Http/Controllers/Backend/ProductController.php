<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Backend\Category;
use App\Models\Backend\Brand;
use App\Models\Backend\Product;
use App\Models\Backend\ProductImage;

use Illuminate\Support\Str;

use Image; 
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view( 'backend.pages.product.manage' , compact('products') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'backend.pages.product.create');
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
            'title'         =>      'required|max:255',
            'description'   =>      'required|max:1000',
            'regular_price' =>      'required|numeric',
            'status'        =>      'required|numeric',
            'brand_id'      =>      'required|numeric',
            'category_id'   =>      'required|numeric',
            // 'images'        =>      'required',
        ]);

        $product = new Product;
        
        $product->title         =  $request->title;
        $product->slug          =  Str::slug( $request->title );
        $product->description   =  $request->description;
        $product->regular_price =  $request->regular_price;
        $product->offer_price   =  $request->offer_price;
        $product->quantity      =  $request->quantity;
        $product->status        =  $request->status;
        $product->is_featured   =  $request->is_featured;
        $product->brand_id      =  $request->brand_id;
        $product->category_id   =  $request->category_id;

        $product->save();

        $slug = Str::slug( $request->title );
        if( isset( $request->images ) && count($request->images) > 0 ){
            foreach ( $request->images as $image ) {
                $image_name = $slug . time() . uniqid() . '.' . $image->getClientOriginalExtension();

                $location = public_path( 'images/products/' . $image_name );

                Image::make( $image )->save( $location );

                $p_image = new ProductImage;

                $p_image->product_id = $product->id;
                $p_image->image = $image_name;

                $p_image->save();
            }
        }

        session()->flash( 'Success' , 'Product Added Successfully ');
        return redirect()->route('manageProduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find( $id );
        return view('backend.pages.product.edit', compact('product') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'title'         =>      'required|max:255',
            'description'   =>      'required|max:1000',
            'regular_price' =>      'required|numeric',
            'status'        =>      'required|numeric',
            'brand_id'      =>      'required|numeric',
            'category_id'   =>      'required|numeric',
        ]);

        $product = Product::find( $id );
        
        $product->title         =  $request->title;
        $product->slug          =  Str::slug( $request->title );
        $product->description   =  $request->description;
        $product->regular_price =  $request->regular_price;
        $product->offer_price   =  $request->offer_price;
        $product->quantity      =  $request->quantity;
        $product->status        =  $request->status;
        $product->is_featured   =  $request->is_featured;
        $product->brand_id      =  $request->brand_id;
        $product->category_id   =  $request->category_id;

        $product->save();

        $slug = Str::slug( $request->title );
        // if( count($request->images) > 0 ){
        //     foreach ( $request->images as $image ) {
        //         $image_name = $slug . time() . uniqid() . '.' . $image->getClientOriginalExtension();

        //         $location = public_path( 'images/products/' . $image_name );

        //         Image::make( $image )->save( $location );

        //         $p_image = new ProductImage;

        //         $p_image->product_id = $product->id;
        //         $p_image->image = $image_name;

        //         $p_image->save();
        //     }
        // }

        session()->flash( 'Success' , 'Product Updated Successfully ');
        return redirect()->route('manageProduct');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find( $id );

        if( $product->images->count() > 0){

            // delete image from storage
            foreach ($product->images as $image) {
                if( File::exists( 'images/products/'.$image->image) ){
                    File::delete( 'images/products/'.$image->image);
                }

                // delete image from images table 
                $image->delete();
            }
        }

        $product->delete();

        session()->flash( 'Success' , 'Product Deleted Successfully ');
        return back();
    }
}
