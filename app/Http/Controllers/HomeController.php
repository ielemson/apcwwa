<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\User;
use App\Desk;
use App\Post;
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
        return view('home');
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

        return view('welcome',compact('state_cordinator','diaspora_network_chapter','desk'));
    }

    public function dnc(){

        $dncs = User::whereHas('roles', function ($query) {
            return $query->where('name', 'dnc');
        })->get();

        return view('frontend.dnc',compact('dncs'));
    }

    public function events(){

        $posts = Post::where('status',1)
                        ->orderBy('id', 'asc')
                        ->get();
        return view('frontend.events',compact('posts'));
    }

    public function event($slug){

        $post = Post::where('post_slug',$slug)->first();
         $categories = Category::with('posts')->get();

          $latest_posts = Post::where('status',1)
         ->orderBy('id', 'asc')
         ->limit(4)->get();

        return view('frontend.event',compact('post','categories','latest_posts'));
    }
}
