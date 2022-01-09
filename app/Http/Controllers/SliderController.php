<?php

namespace App\Http\Controllers;

use App\Slider;
use App\State;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::paginate(10);
        return view('slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::pluck('name','id');
        return view('slider.create',compact('states'));
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
            'title1' => 'required|max:255',
            'title2' => 'required|max:255',
            'state_id' => 'required|max:255',
            'image' => 'required|max:255',
        ],
        [
          'title1.required'=>'Slider title is required' , 
          'title2.required'=>'Slider title is required'  ,
          'state_id.required'=>'Slider State is required' , 
          'image.required'=>'Image is required'  
        ]
    
    );

        $sliderData = $request->all();
        if ($request->image) {
            $sliderData['image'] = parse_url($request->image, PHP_URL_PATH);
        }
        Slider::create($sliderData);
        flash('Slider created successfully!')->success();
        return redirect()->route('slider.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
