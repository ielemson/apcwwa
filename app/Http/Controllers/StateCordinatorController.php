<?php

namespace App\Http\Controllers;

use App\State;
use App\StateCordinator;
use App\User;
use App\Zone;
use Illuminate\Http\Request;

class StateCordinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stateCords = StateCordinator::with('user')->with('state')->with('zone')->paginate(10);
        // dd($zonalCords);
        return view('stcord.index',compact('stateCords'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::whereHas('roles', function ($query) {
            return $query->where('name', '!=', 'super-admin');
            })->pluck('name','id');

        $states = State::pluck('name','id');
        $zonalCords = Zone::with('user')->get();
   

   return view('stcord.create',compact('states','users','zonalCords'));
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
            'user_id' =>'required',
            'state_id'=>'required',
            'zone_id'=>'required'
           ],[
               'user_id.required'=>'User is required',
            //    'user_id.unique'=>'User has been taken',
               'zone_id.required'=>'Zone is required',
            //    'state_id.unique'=>'State has been taken',
            //    'zone_id.unique'=>'Zone has been taken'
           ]);


        //    dd($request);
           $state_cord_model = new StateCordinator();

           $state_cord_model->user_id = $request->user_id;
           $state_cord_model->state_id = $request->state_id;
           $state_cord_model->zone_id = $request->zone_id;
           $state_cord_model->save();
     
           flash('Data created successfully')->success();
             return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StateCordinator  $stateCordinator
     * @return \Illuminate\Http\Response
     */
    public function show(StateCordinator $stateCordinator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StateCordinator  $stateCordinator
     * @return \Illuminate\Http\Response
     */
    public function edit(StateCordinator $stateCordinator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StateCordinator  $stateCordinator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StateCordinator $stateCordinator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StateCordinator  $stateCordinator
     * @return \Illuminate\Http\Response
     */
    public function destroy(StateCordinator $stateCordinator)
    {
        //
    }
}
