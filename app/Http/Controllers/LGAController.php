<?php

namespace App\Http\Controllers;

use App\LGA;
use Illuminate\Http\Request;

class LGAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getLga(Request $request)
    {
         
       $state_id = $request->state_id;
         
        $lgas = LGA::where('state_id',$state_id)->get();
        return response()->json([
            'lga' => $lgas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

            'state_id'=>'required',
            'name'=>'required'
        ],
        // [
        //     'name.required'=>'LGA name is required',
        //     'name.unique'=>$request->name.' '.'exists in our collection',
        //     'state_id.required'=>'State name is required'
        // ]
        );

        $lga = new LGA();
        $lga_check = LGA::where([
            ['state_id', '=', $request->state_id],
            ['name', '=', $request->name]
        ])
        ->first();

        if(!empty($lga_check)){

            flash('LGA already exist for this state')->error();
            return redirect()->route('state.create');
        }

        $lga->name = $request->name;
        $lga->state_id = $request->state_id;
        $lga->save();

        flash('LGA created successfully!')->success();
        return redirect()->route('state.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LGA  $lGA
     * @return \Illuminate\Http\Response
     */
    public function show(LGA $lGA)
    {
        return $lGA;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LGA  $lGA
     * @return \Illuminate\Http\Response
     */
    public function edit(LGA $lGA)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LGA  $lGA
     * @return \Illuminate\Http\Response
     */
    public function updateLga(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'lga_id'=>'required'
        ],
        [
            'name.required'=>'LGA name is required',
            'lga_id.required'=>'Please select LGA to edit'
        ]
    );

    $lga = LGA::findorFail($request->lga_id);
    $lga->name = $request->name;
    $lga->save();
    flash('LGA updated successfully!')->success();
    return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LGA  $lGA
     * @return \Illuminate\Http\Response
     */
    public function destroy(LGA $lGA)
    {
        //
    }
}
