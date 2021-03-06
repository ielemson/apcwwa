<?php

namespace App\Http\Controllers;

use App\Service;
use App\State;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->title.'-'.Str::random(5), '-');
        $request->merge(['slug'=>$slug]);
        $service = $request->except('featured_image');
        if ($request->featured_image) {
            $service['featured_image'] = parse_url($request->featured_image, PHP_URL_PATH);
        }

        Service::create($service);
        flash('Service created successfully!')->success();
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $states = State::all();
        $service = Service::where('id',$id)->first();
        return view('frontend.service',compact('service','states'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $serviceData = $request->except('featured_image');

        if ($request->featured_image) {
            $serviceData['featured_image'] = parse_url($request->featured_image, PHP_URL_PATH);
        }

        $service->update($serviceData);
        // $user->syncRoles($request->role);
        flash('Service updated successfully!')->success();
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        flash('Service deleted successfully!')->info();
        return back();
    }
}
