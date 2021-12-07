<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\User;
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
        // return $state_cordinator = User::all();

        return view('welcome',compact('state_cordinator','diaspora_network_chapter'));
    }
}
