<?php

namespace App\Http\Controllers;

use App\Ward;
use Illuminate\Http\Request;

class WardController extends Controller
{
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
        Ward::create($request->all());
        flash('Ward created successfully!')->success();
        return redirect()->route('state.create');
    }


    public function getWard(Request $request){

        $lga_id = $request->lga_id;
         
        $wards = Ward::where('lga_id',$lga_id)->get();
        return response()->json([
            'wards' => $wards
        ]);
    }

    public function updateWard(Request $request){
        
        $request->validate([
            'lga_id'=>'required',
            'name'=>'required',
            'ward'=>'required',

        ],[
            'lga_id.required'=>'LGA name is required',
            'ward.required'=>'Select Ward to update',
            'name.required'=>'Enter New Ward'
        ]);

        $ward = Ward::find($request->ward);

        $ward->name = $request->name;
        $ward->save();
        flash('Ward updated successfully!')->success();
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ward $ward)
    {
        //
    }
}
