<?php

namespace App\Http\Controllers;

use App\Ward;
use App\WardCoordinator;
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
  
        $request->validate([
            'lga_id'=>'required',
            'state_id'=>'required',
            'name'=>'required',
            'cordname'=>'required',

        ],[
            'lga_id.required'=>'Select LGA',
            'state_id.required'=>'Select State',
            'name.required'=>'Enter Ward',
            'cordname.required'=>'Enter Ward Coordinator'
        ]);

        $wardData = $request->except('cordname');
        $createdWard = Ward::create($wardData);
        $request->merge(['ward_id'=>$createdWard->id]);
        WardCoordinator::create($request->all());
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
            // 'state_id'=>'required',
            'name'=>'required',
            'ward_id'=>'required',
            // 'ward_coordinator'=>'required',

        ],[
            'lga_id.required'=>'LGA name is required',
            // 'state_id.required'=>'State name is required',
            'ward_id.required'=>'Select Ward to update',
            'name.required'=>'Enter New Ward',
            // 'ward_coordinator.required'=>'Enter Ward Coordinator'
        ]);

        $ward = Ward::find($request->ward_id);
        $ward->name = $request->name;
        $ward->save();

        $wardCord = WardCoordinator::find($request->ward_id);

        dd($wardCord);

        flash('Ward updated successfully!')->success();
        return redirect()->back();
    }
  

    public function destroy(Ward $ward)
    {
        //
    }
}
