<?php

namespace App\Http\Controllers;

use App\LGA;
use App\State;
use Illuminate\Http\Request;

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
        //
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
        //
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
}
