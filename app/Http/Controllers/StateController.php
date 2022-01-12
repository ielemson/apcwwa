<?php

namespace App\Http\Controllers;

use App\LGA;
use App\State;
use App\Ward;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $states = State::with('lgas')->with('wards')->get();
        return view('state.index',compact('states'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        $states = State::orderBy('name')->get();
        return view('state.create',compact('states'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chck_state = State::where('name',$request->state_name)->first();

        if($chck_state){
        
        $chck_lga = LGA::where('name',$request->lga_name)->first();

        if($chck_lga){

        flash('LGA Already exists')->warning();
        return redirect()->route('state.create');

        }

            $lga = new LGA();
            $lga->name = $request->lga_name;
            $lga->state_id = $chck_state->id;
            $lga->save();

            flash('State And LGA created successfully!')->success();
            return redirect()->route('state.create');

        }else{

            $state = new State();

            $state->name = $request->state_name;
            $state->save();
    
            $chck_lga = LGA::where('name',$request->lga_name)->first();
    
            if($chck_lga){
    
            flash('LGA Already exists')->warning();
            return redirect()->route('state.create');
    
            }
    
            $lga = new LGA();
            $lga->name = $request->lga_name;
            $lga->state_id = $state->id;
            $lga->save();
    
            flash('State And LGA created successfully!')->success();
            return redirect()->route('state.create');
        }
        
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {
        // dd($state);
        $state = State::where('id',$state->id)->with('lgas')->with('wards')->first();
        // dd($state);
        return view('state.edit',compact('state'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, State $state)
    {
        $request->validate([

            'state_name' => 'required',
            // 'lga_id' => 'required',
            // 'lga_name' => 'required',
            // 'ward_name' => 'nullable',
            // 'ward_id' => 'nullable',
        ],
           [
               'state_name.required' => 'State name is required',
            //    'lga_id.required' => 'Select LGA to update',
            //    'lga_name.required' => 'LGA name is required',
            //    'ward_name.required' => 'Ward name is required',
            //    'ward_id.required' => 'Select a Ward to update',
              
           ]);


            $state = State::findorFail($state->id);

        //    if(strtolower($state->name) === strtolower($request->state_name)){
            
        //         flash('No new data to update')->info();
        //         return redirect()->back();
           

        //    }
           
           if($state && strtolower($state->name) !== strtolower($request->state_name)){

            $state->name = $request->state_name;
            $state->save();
            // flash('Data updated successfully!')->success();
            // return redirect()->back();
            
           }

           if(!empty($request->lga_id ) && !empty($request->lga_name)){

            $lga = LGA::findorFail($request->lga_id);
            $lga->name = $request->lga_name;
            $lga->save();
        }

        if(!empty($request->ward_id) && !empty($request->ward_name)){

            $ward = Ward::findorFail($request->ward_id);
            $ward->name = $request->ward_name;
            $ward->save();
        }

        flash('Data updated successfully!')->success();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy(State $state)
    {
        //
    }


    // STATE ACTIVIRIES STARTS HERE ############################################################
  
    // STATE ACTIVIRIES STARTS HERE ############################################################
}
