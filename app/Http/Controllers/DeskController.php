<?php

namespace App\Http\Controllers;

use App\Desk;
use Illuminate\Http\Request;

class DeskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title =  'Manage Desk';
        $desks = Desk::all();
        return view('desk.index', compact('title','desks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('desk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $deskData = $request->all();
        if ($request->profile_photo) {
            $deskData['user_photo'] = parse_url($request->profile_photo, PHP_URL_PATH);
        }
        Desk::create($deskData);
        flash('Desk created successfully!')->success();
        return redirect()->route('desk.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Desk  $desk
     * @return \Illuminate\Http\Response
     */
    public function show(Desk $desk)
    {
        return view('desk.edit',compact('desk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Desk  $desk
     * @return \Illuminate\Http\Response
     */
    public function edit(Desk $desk)
    {
        return view('desk.edit',compact('desk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Desk  $desk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Desk $desk)
    {
        $deskData = $request->except('user_photo');

        if ($request->user_photo) {
            $deskData['user_photo'] = parse_url($request->user_photo, PHP_URL_PATH);
        }
        $desk->update($deskData);
        // $user->syncRoles($request->role);
        flash('Desk updated successfully!')->success();
        return redirect()->route('desk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Desk  $desk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desk $desk)
    {
        // if ($user->id == Auth::user()->id || $user->id ==1) {
        //     flash('You can not delete logged in user!')->warning();
        //     return back();
        // }
        $desk->delete();
        flash('Desk deleted successfully!')->info();
        return back();
    }
}
