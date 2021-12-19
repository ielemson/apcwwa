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
        //
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
    public function update(Request $request, LGA $lGA)
    {
        //
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
