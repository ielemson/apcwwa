<?php

namespace App\Http\Controllers;

use App\dnc;
use App\User;
use Illuminate\Http\Request;

class DncController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dncs = dnc::with('user')->paginate(10);
        // dd($dncs);
        return view('dnc.index',compact('dncs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::pluck('name','id');
        return view('dnc.create',compact('users'));
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
            'user_id' => 'required',
            'post' => 'required',
            'dnc_order' => 'required|unique:dncs',
        ],
        [
            'user_id.required'=>'User name is required.',
            'post.required'=>'User post is required.',
            'dnc_order.required'=>'User order is required.',
            'dnc_order.unique'=>'User order is taken.'
        ]
        );
        
        
        $dnc = new dnc();

        $dnc->user_id = $request->user_id;
        $dnc->post = $request->post;
        $dnc->dnc_order= $request->dnc_order;
        $dnc->save();

        flash('DNC created successfully')->success();
        return redirect()->route('dnc.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dnc  $dnc
     * @return \Illuminate\Http\Response
     */
    public function show(dnc $dnc)
    {
        // dd($dnc);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dnc  $dnc
     * @return \Illuminate\Http\Response
     */
    public function edit(dnc $dnc)
    {
        $users = User::pluck('name','id');
        // dd($dnc);
        return view('dnc.edit',compact('dnc','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dnc  $dnc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dnc $dnc)
    {
        $request->validate([

            // 'lga_name' => 'required|unique:lgas',
            'user_id' => 'required',
            'post' => 'required',
            'dnc_order' => 'required',
        ],
        [
            'user_id.required'=>'User name is required.',
            'post.required'=>'User post is required.',
            'dnc_order.required'=>'User order is required.',
        ]
        );
        

        $dncData = $request->all();
        $dnc->update($dncData);

        flash('DNC updated successfully')->success();
        return redirect()->route('dnc.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dnc  $dnc
     * @return \Illuminate\Http\Response
     */
    public function destroy(dnc $dnc)
    {
        $dnc->delete();
        flash('DNC deleted successfully!')->info();
        return back();
    }
}
