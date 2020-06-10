<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Backend\Division; 
use App\Models\Backend\District; 

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districts = District::orderBy('name', 'asc')->get();
        return view('backend.pages.district.manage' , compact('districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisions = Division::orderBy('name', 'asc')->get();
        return view('backend.pages.district.create' , compact('divisions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'        => 'required|max:255',
            'division_id' => 'required|numeric',
        ] , [            
            'name.required'        => 'Please insert a valid district name',
            'division_id.required' => 'Please select a division',
        ]);

        $district = new District;

        $district->name     = $request->name;
        $district->division_id = $request->division_id;

        $district->save();

        session()->flash( 'Success' , 'District Created Successfully ');
        return redirect()->route('manageDistrict');
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
        $district  = District::find( $id );
        $divisions = Division::orderBy('name' , 'asc')->get();

        if( !is_null($district) ){
            return view('backend.pages.district.edit' , compact('district', 'divisions'));
        }else{
            session()->flash( 'Error' , 'Page Not Found');
            return view('backend.pages.district.manage');
        }
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
        $this->validate($request, [
            'name'        => 'required|max:255',
            'division_id' => 'required|numeric',
        ] , [            
            'name.required'        => 'Please insert a valid district name',
            'division_id.required' => 'Please select a division',
        ]);

        $district = District::findOrFail( $id );

        $district->name        = $request->name;
        $district->division_id = $request->division_id;

        $district->save();

        session()->flash( 'Success' , 'District Updated Successfully ');
        return redirect()->route('manageDistrict');
    }

    /**
     * Remove the specified resource from storage.
     *  1
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {       
        $district = District::find( $id );

        if( !is_null($district) ){

            $district->delete();       
            session()->flash( 'Success' , 'District Deleted Successfully ');     
        }

        return back();
    }
}
