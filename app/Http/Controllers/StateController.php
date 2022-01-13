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
        $request->validate([

            // 'lga_name' => 'required|unique:lgas',
            'name' => 'required|unique:states',
        ],
        [
            'name.required'=>'State name is required.',
            'name.unique'=>'State name is taken.'
        ]
        );
        
        
        $state = new State();

        $state->name = $request->name;
        $state->slogan = $request->slogan;
        $state->save();
        flash('State created successfully')->success();
        return redirect()->route('state.create');
      
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
        $states = State::orderBy('name')->get();
        // dd($state);
        return view('state.edit',compact('state','states'));
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
            'name'=>'required'
        ],
        [
            'name.required'=>'Please Select a valid state name'
        ]
    );

    $state->name = $request->name;
    $state->save();
    flash('State updated successfully!')->success();
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
