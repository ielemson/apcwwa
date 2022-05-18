<?php

namespace App\Http\Controllers;

use App\LGA;
use App\Slider;
use App\State;
use App\StateActivity;
use App\Ward;
use App\WardCoordinator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StateActivityController extends Controller
{
  
    public function index(){

        $events = StateActivity::paginate(10);
        return view('state.events',compact('events'));
    }


      
    public function create(){

        $states = State::orderBy('name')->get();
        return view('state.createEvent',compact('states'));
    }

 
    public function store(Request $request)
    {
        // dd($request);
        $event_slug = Str::slug($request->event_title.'-'.Str::random(5), '-');

        $request->merge(['user_id' => Auth::user()->id,'event_slug' =>$event_slug]);
//   dd($request);
        $post = $request->except('featured_image');

        if ($request->featured_image) {
            $post['featured_image'] = parse_url($request->featured_image, PHP_URL_PATH);
        }
        StateActivity::create($post);
        flash('Post created successfully!')->success();
        return redirect()->route('state-event.index');
    }


    public function state_events($state){

        $state = State::where('name',$state)->first();

        if ($state != null) {
          
            $sliders = Slider::where('state_id',$state->id)->get();

            if(count($sliders)==0){
                // $sliders = Slider::whereNull('state_id')->OrderBy('position','ASC')->get();
                $sliders = Slider::where('status','front')->get();
    
            //    $sliders =  Slider::select("*")
            //                 ->whereNull('state_id')
            //                 ->get();
            }
    
            // dd($sliders);
    
            $states = State::all();
            $state_events = StateActivity::where('state_id',$state->id)->where('status', '=',1)->with('state')->paginate(6);
            return view('apcwwa.state.events',compact('state_events','state','states','sliders'));

        }else{
            return redirect()->route('welcome');
        }
      
    }



    public function state_event($state,$slug){

        $state = State::where('name',$state)->first();
        $slider = Slider::where('state_id',$state->id)->get();
        // dd($slider);

        $states = State::all();
        $state_event = StateActivity::where('event_slug',$slug)->with('state')->first();
        $state_events = StateActivity::where('state_id',$state->id)->where('status', '=',1)->with('state')->limit(4)->get();
        return view('apcwwa.state.event',compact('state_event','state','states','state_events'));
    }

    public function edit($id)
    {
      $event  = StateActivity::where('id',$id)->with('lga')->first();
      $states = State::orderBy('name')->get();
    //   $lgas = LGA::orderBy('name')->get();

      return view('state.editEvent',compact('states','event'));
         
    }

    public function update(Request $request, $id)
    {

        // dd($request);
      $stateActivity = StateActivity::find($id);
        $postdata = $request->except('featured_image');
        if ($request->featured_image) {
            $postdata['featured_image'] = parse_url($request->featured_image, PHP_URL_PATH);
        }

        $stateActivity->update($postdata);
        flash('Post updated successfully!')->success();
        return redirect()->route('state-event.index');
    }

    public function stateEventslga($state){
        
        $state_id = State::where('name',$state)->first();

        $sliders = Slider::where('state_id',$state_id->id)->get();

        if(count($sliders)==0){
            // $sliders = Slider::whereNull('state_id')->OrderBy('position','ASC')->get();
            $sliders = Slider::where('status','front')->get();

        //    $sliders =  Slider::select("*")
        //                 ->whereNull('state_id')
        //                 ->get();
        }

        $states = State::all();
        $state_lga = State::where('name',$state)->with('lgas')->with('wards')->first();
        // dd($states);

        return view('apcwwa.state.lga',compact('state_lga','states','sliders','state'));
    }

   
  
    public function destroy($id)
    {

        // dd($id);
        $stateActivity = stateActivity::find($id);
        $stateActivity->delete();
        flash('Event deleted successfully!')->info();
        return back();
    }

}
