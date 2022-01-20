<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\User;
use App\Desk;
use App\LGA;
use App\Post;
use App\Service;
use App\Slider;
use App\State;
use App\Ward;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $states = State::count();
        $wards = Ward::count();
        $lgas = LGA::count();
        $users = User::count();
        return view('home',compact('states','lgas','wards','users'));
    }


    public function about_us(){
        $states = State::all();
        return view('frontend.aboutus',compact('states'));
    }

    public function contact_us(){
        $states = State::all();
        return view('frontend.contactus',compact('states'));
    }

    public function welcome()
    {
        $state_cordinator = User::whereHas('roles', function ($query) {
            return $query->where('name', 'state-cordinator');
        })->get();


        $diaspora_network_chapter = User::whereHas('roles', function ($query) {
            return $query->where('name', 'diaspora-network-chapter');
        })->get();


        $desk = Desk::all();

        $states = State::all();

        $upcoming_events = Post::where('status',1)->where('event_status','upcoming')->paginate(10);

        $services = Service::paginate(10);

        $sliders = Slider::where('status','front')->Orderby('position','ASC')->get();

        // dd($sliders);
        return view('welcome',compact('state_cordinator','diaspora_network_chapter','desk','states','upcoming_events','services','sliders'));
    }

    // public function service($id){

    //     $services = Service::where('id',$id)->first();

    //     return view('frontend.service');
    // }

    public function desk_more($slug){
        $states = State::all();
        $desk = Desk::where('slug',$slug)->first();
        return view('frontend.desk_detail',compact('states','desk'));
    }

    public function dnc(){

        $dncs = User::whereHas('roles', function ($query) {
            return $query->where('name', 'dnc');
        })->get();
        $states = State::all();
        return view('frontend.dnc',compact('dncs','states'));
    }


    public function dnc_details($slug){
        $dncs = User::where('name',$slug)->first();
        $states = State::all();
        return view('frontend.dnc_details',compact('dncs','states'));
    }

    public function events(){

        $posts = Post::where('status',1)
                        ->orderBy('id', 'asc')
                        ->paginate(9);
         $states = State::all();
        return view('frontend.events',compact('posts','states'));
    }

    public function event($slug){

        $post = Post::where('post_slug',$slug)->first();
        $categories = Category::with('posts')->get();

        $latest_posts = Post::where('status',1)
                        ->orderBy('id', 'asc')
                        ->limit(4)->get();
        $states = State::all();
        return view('frontend.event',compact('post','categories','latest_posts','states'));
    }
}
