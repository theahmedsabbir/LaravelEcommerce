<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Backend\Division; 
use App\Models\Backend\District; 

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisions = Division::orderBy('priority', 'asc')->get();
        return view('backend.pages.division.manage' , compact('divisions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.division.create');
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
            'name'     => 'required|max:255',
            'priority' => 'required',
        ] , [            
            'name.required'     => 'Please insert a valid division',
            'priority.required' => 'Please set a priority',
        ]);

        $division = new Division;

        $division->name     = $request->name;
        $division->priority = $request->priority;

        $division->save();

        session()->flash( 'Success' , 'Division Created Successfully ');
        return redirect()->route('manageDivision');
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
        $division = Division::find( $id );

        if( !is_null($division) ){
            return view('backend.pages.division.edit' , compact('division'));
        }else{
            session()->flash( 'Error' , 'Page Not Found');
            return view('backend.pages.division.manage');
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
            'name'     => 'required|max:255',
            'priority' => 'required',
        ] , [            
            'name.required'     => 'Please insert a valid division',
            'priority.required' => 'Please set a priority',
        ]);

        $division = Division::find( $id );

        $division->name     = $request->name;
        $division->priority = $request->priority;

        $division->save();

        session()->flash( 'Success' , 'Division Updated Successfully ');
        return redirect()->route('manageDivision');
    }

    /**
     * Remove the specified resource from storage.
     *  1
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {       
        $division = Division::find( $id );

        if( !is_null($division) ){

            $districts = District::where( 'division_id' , $division->id )->get();

            if( isset( $districts )){
                foreach ($districts as $district) {
                    $district->delete();
                }
            }

            $division->delete();  
            session()->flash( 'Success' , 'Division Deleted Successfully ');          
        }

        return back();
    }
}
