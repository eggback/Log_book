<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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

    public function admin()
    {
        $user = User::get();
        // dd($user);
        return view('welcome', compact('user'));
    }

    public function form()
    {
        // $user = User::get();
        // dd($user);
        return view('form');
    }
    public function create_profile()
    {
        // $user = User::get();
        // dd($user);
        return view('form');
    }
}
