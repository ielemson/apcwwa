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
use App\Mail\ContactUs;
use App\PostType;
use App\Types;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

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
        // dd($state_zonal_cords);

        $diaspora_network_chapter = User::whereHas('roles', function ($query) {
            return $query->where('name', 'diaspora-network-chapter');
        })->get();


        $desk = Desk::all();

        $states = State::all();

        // $upcoming_events = Post::where('status',1)->where('event_status','upcoming')->paginate(10);

        $services = Service::paginate(10);

        $sliders = Slider::where('status','front')->Orderby('position','ASC')->get();

        // dd($sliders);
        return view('welcome',compact('state_zonal_cords','diaspora_network_chapter','desk','states','services','sliders'));
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

   
    function getstates(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
        $queryStr = strtolower($query);
       $data = DB::table('states')
         ->where('name', 'like', '%'.$queryStr.'%')
         ->orWhere('slogan', 'like', '%'.$queryStr.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('states')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $state)
       {
        $output .= '
        <div class="inner-box col-md-3 col-sm-3 col-lg-3 mr-lg-4 mb-4">
        <div class="content">

            <h4>'.$state->name.' State</h4>
            <h5>'.$state->slogan.'</h5>

            <div class="read-more"><a href="/event/'.$state->name.'/'.$state->slug.'"><span>view event</span></a></div>

        </div>

    </div>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'state_data'  => $output,
    //    'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }

    public function dnc(){

        // $dncs = User::whereHas('roles', function ($query) {
        //     return $query->where('name', 'diaspora-network-chapter');
        // })->orderBy("id", "asc")->get();

        $dncs = dnc::with('user')->orderBy('dnc_order','ASC')->get();

        // $posts = Post::where('status',1)
        // ->where('event_status','dnc')
        // ->orderBy('id', 'asc')
        // ->paginate(9);
        $typeId = Types::where('type','dnc')->pluck('id');

        $postTypeIds = PostType::whereIn('type_id',$typeId)->pluck('post_id');
        // dd($postTypeIds);
        $posts = Post::where('status',1)
                        ->whereIn('id', $postTypeIds)
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

        $typeId = Types::where('type','general')->pluck('id');

        $postTypeIds = PostType::whereIn('type_id',$typeId)->pluck('post_id');
        // dd($postTypeIds);
        $posts = Post::where('status',1)
                        ->whereIn('id', $postTypeIds)
                        ->orderBy('id', 'asc')
                        ->paginate(9);
         $states = State::all();
         $categories = Category::all();

         $latest_posts = Post::where('status',1)
         ->whereIn('id', $postTypeIds)
         ->orderBy('id', 'asc')
         ->paginate(9);
        return view('apcwwa.event.events',compact('posts','states','categories','latest_posts'));
    }

    public function events_catgory($slug){
        $category = Category::where('category_name',$slug)->first();
        $posts = Post::where([['status', '=',1],['category_id','=',$category->id]])
        ->orderBy('id', 'asc')
        ->paginate(9);
        $states = State::all();
        $categories = Category::all();
        $latest_posts = Post::where('status',1)
                        ->orderBy('id', 'asc')
                        ->limit(4)->get();
        return view('apcwwa.event.events',compact('posts','states','categories','latest_posts'));
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

    public function contact_email(Request $request){

      $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'location'=>'required',
        'message'=>'required',
        'g-recaptcha-response' => 'required|captcha',
      ],
    [
        'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
        'g-recaptcha-response.captcha' => 'Captcha error! try again later or contact site admin.',
        
    ]);
        $email = "info@apcwwa.com";
      Mail::to($email)->send(new ContactUs($request));
      return redirect()->back()->with('message', 'Thank you for contacting us, we will revert shortly');

    }

}
