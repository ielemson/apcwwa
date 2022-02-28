<?php

namespace App\Http\Controllers;

use App\User;
use App\ZonalStateCord;
use Illuminate\Http\Request;

class ZonalStateCordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zone_state_cords =ZonalStateCord::with('user')->paginate(10);
        return view('users.zonal_state_cord',compact('zone_state_cords'));
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

            'portfolio'=>'required',
            'user_id'=>'required|unique:zonal_and_state_cords',
        ]);


        $zone_state_model = new ZonalStateCord();

        $zone_state_model->portfolio = $request->portfolio;
        $zone_state_model->user_id = $request->user_id;

        $zone_state_model->save();

        flash('Data created successfully')->success();
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ZonalStateCord  $zonalStateCord
     * @return \Illuminate\Http\Response
     */
    public function show(ZonalStateCord $zonalStateCord)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ZonalStateCord  $zonalStateCord
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $zone_state_cord = ZonalStateCord::where('id',$id)->first();
          $users = User::whereHas('roles', function ($query) {
            return $query->where('name', '!=', 'super-admin');
            })->get();
        // dd($zone_state_cord);
        return view('users.edit_zonal_state_cord',compact('zone_state_cord','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ZonalStateCord  $zonalStateCord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ZonalStateCord $zonalStateCord)
    {
        $request->validate([

            'portfolio'=>'required',
            'user_id'=>'required',
        ]);


        $zone_state_model = ZonalStateCord::where('id',$zonalStateCord->id)->first();

        $zone_state_model->portfolio = $request->portfolio;
        $zone_state_model->user_id = $request->user_id;

        $zone_state_model->save();

        flash('Data created successfully')->success();
            return redirect()->back();
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ZonalStateCord  $zonalStateCord
     * @return \Illuminate\Http\Response
     */
    public function destroy(ZonalStateCord $zonalStateCord)
    {
        //
    }
}
