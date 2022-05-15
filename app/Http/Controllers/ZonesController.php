<?php

namespace App\Http\Controllers;

use App\State;
use App\User;
use App\Zone;
use Illuminate\Http\Request;

class ZonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zones = Zone::with('user')->with('zone_states')->paginate(10);
        // dd($zones);
            return view('nzsc.index',compact('zones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zones = Zone::pluck('zone','id');
        $states = State::pluck('name','id');
        $users = User::pluck('name','id');
        return view('nzsc.create',compact('states','zones','users'));
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
            'user_id' =>'required|unique:zones',
            'zone'=>'required|unique:zones'
           ],[
               'user_id.required'=>'User is required',
               'user_id.unique'=>'User has been taken',
               'zone.required'=>'Zone is required',
               'zone.unique'=>'Zone has been taken'
           ]);
    
        //   $zone_cord =  $request->all();
            // dd($request->all());
          $zone_cord_model = new Zone();
    
          $zone_cord_model->user_id = $request->user_id;
        //   $zone_cord_model->state_id = $request->state_id;
          $zone_cord_model->zone = $request->zone;
          $zone_cord_model->save();
    
          flash('Data created successfully')->success();
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Zones  $zones
     * @return \Illuminate\Http\Response
     */
    public function show(Zone $zone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Zone  $zones
     * @return \Illuminate\Http\Response
     */
    public function edit(Zone $zone)
    {
        $zones = Zone::all();
        $users = User::all();
        $states = State::all();
        // dd($states);
        return view('nzsc.edit',compact('zones','states','users','zone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Zones  $zones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zone $zons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Zones  $zones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zone $zone)
    {
        //
    }
}
