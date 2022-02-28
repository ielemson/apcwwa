<?php

namespace App\Http\Controllers;

use App\ZoneState;
use Illuminate\Http\Request;

class ZoneStateController extends Controller
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

            'zone_id'=>'required',
            'user_id'=>'required',
            'state_id'=>'required|unique:zone_states',
        ]);


        $zone_state_model = new ZoneState();

        $zone_state_model->zone_id = $request->zone_id;
        $zone_state_model->user_id = $request->user_id;
        $zone_state_model->state_id = $request->state_id;

        $zone_state_model->save();

        flash('Data created successfully')->success();
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ZoneState  $zoneState
     * @return \Illuminate\Http\Response
     */
    public function show(ZoneState $zoneState)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ZoneState  $zoneState
     * @return \Illuminate\Http\Response
     */
    public function edit(ZoneState $zoneState)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ZoneState  $zoneState
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ZoneState $zoneState)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ZoneState  $zoneState
     * @return \Illuminate\Http\Response
     */
    public function destroy(ZoneState $zoneState)
    {
        //
    }
}
