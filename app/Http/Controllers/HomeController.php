<?php

namespace App\Http\Controllers;

use App\Category;
// use Illuminate\Http\Request;
// use Spatie\Permission\Models\Permission;
// use Spatie\Permission\Models\Role;
use App\User;
use App\Desk;
use App\dnc;
use App\Gallery;
use App\LGA;
use App\Post;
use App\Service;
use App\Slider;
use App\State;
use App\Ward;
use App\ZonalStateCord;
use App\Zone;

// use WardCordinator;

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
        return view('apcwwa.aboutus',compact('states'));
    }

    public function contact_us(){
        $states = State::all();
        return view('apcwwa.contact',compact('states'));
    }

    public function membership(){
        return view('frontend.membership');
    }
    

    public function welcome()
    {
        $state_zonal_cords = ZonalStateCord::orderBy('id','desc')->get();

        $diaspora_network_chapter = User::whereHas('roles', function ($query) {
            return $query->where('name', 'diaspora-network-chapter');
        })->get();


        $desk = Desk::all();

        $states = State::all();

        $upcoming_events = Post::where('status',1)->where('event_status','upcoming')->paginate(10);

        $services = Service::paginate(10);

        $sliders = Slider::where('status','front')->Orderby('position','ASC')->get();

        // dd($sliders);
        return view('welcome',compact('state_zonal_cords','diaspora_network_chapter','desk','states','upcoming_events','services','sliders'));
    }

    // public function service($id){

    //     $services = Service::where('id',$id)->first();

    //     return view('frontend.service');
    // }

    public function desk_more($slug){
        $states = State::all();
        $desk = Desk::where('slug',$slug)->first();
        return view('apcwwa.desk_single',compact('states','desk'));
    }

    public function states(){
        $states = State::all();
        return view('apcwwa.state.states',compact('states'));
    }

    public function dnc(){

        // $dncs = User::whereHas('roles', function ($query) {
        //     return $query->where('name', 'diaspora-network-chapter');
        // })->orderBy("id", "asc")->get();

        $dncs = dnc::with('user')->orderBy('dnc_order','ASC')->get();

        $posts = Post::where('status',1)
        ->where('event_status','dnc')
        ->orderBy('id', 'asc')
        ->paginate(9);

        $galleries = Gallery::where('category','dnc')->get();

        $states = State::all();
        return view('apcwwa.dnc_page',compact('dncs','states','posts','galleries'));
        // return view('frontend.dnc.dnc',compact('dncs','states','posts','galleries'));
    }


    public function dnc_members(){
        // $dncs = User::whereHas('roles', function ($query) {
        //     return $query->where('name', 'diaspora-network-chapter');
        // })->orderBy("id", "asc")->get();
        $dncs = dnc::with('user')->orderBy('dnc_order','ASC')->get();
        // dd($dncs);
        $states = State::all();
        return view('frontend.dnc.members',compact('dncs','states'));
    }

    public function dnc_event(){

        $posts = Post::where('status',1)
                        ->where('event_status','dnc')
                        ->orderBy('id', 'asc')
                        ->paginate(9);

        $states = State::all();
        return view('frontend.dnc.dncEvent',compact('posts','states'));
    }

    public function dnc_gallery(){
        $states = State::all();
        $galleries = Gallery::where('category','dnc')->get();
        // dd($galleries);
        return view('frontend.dnc.dncGallery',compact('states','galleries'));
    }
    public function dnc_details($slug){
        $dncs = User::where('name',$slug)->first();
        $states = State::all();
        return view('frontend.dnc.dnc_details',compact('dncs','states'));
    }

    public function events(){

        $posts = Post::where('status',1)
                        ->whereNotIn('event_status', ['dnc'])
                        ->orderBy('id', 'asc')
                        ->paginate(9);
         $states = State::all();
         $categories = Category::all();

         $latest_posts = Post::where('status',1)
                        ->orderBy('id', 'asc')
                        ->limit(4)->get();
        return view('apcwwa.event.events',compact('posts','states','categories','latest_posts'));
    }

    public function events_catgory($slug){
        $category = Category::where('category_name',$slug)->first();
        $posts = Post::where([['status', '=',1],['category_id','=',$category->id]])
        ->whereNotIn('event_status', ['dnc'])
        ->orderBy('id', 'asc')
        ->paginate(9);
        $states = State::all();
        $categories = Category::all();

        return view('apcwwa.event.events',compact('posts','states','categories'));
    }

    public function event($slug){

        $post = Post::where('post_slug',$slug)->first();
        $categories = Category::with('posts')->get();

        $latest_posts = Post::where('status',1)
                        ->orderBy('id', 'asc')
                        ->limit(4)->get();
        $states = State::all();
        return view('apcwwa.event.event',compact('post','categories','latest_posts','states'));
    }

    
    public function lgaWard($slug){

        $lga = LGA::where('name',$slug)->first();

        if($lga){

            // $wards = Ward::where('lga_id',$lga->id)->with('cordinator')->with('state')->with('lga')->get();
            $wards = Ward::where('lga_id',$lga->id)->with('cordinator')->with('state')->with('lga')->get();
            // dd($wards);
            $states = State::all();
            return view('apcwwa.state.ward',compact('wards','states','slug'));
        }else{
            return back();
        }
        
    }

    public function zonal_state_cord(){
        $states = State::all();
        $zones = Zone::all();
        // dd($zones);
        return view('frontend.zonal-state-cord.index',compact('zones','states'));
    }

    public function donate(){
        return view('apcwwa.donation.donate');
    }
}
