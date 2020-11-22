<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    
    public function index()
    {
        $posts  =Post::all();
      
        return view ('homes.index',[
            'posts' =>$posts,
        ]);
    }
    public function show()
    {
        $users =User::all();
        // dd($users);
        
        return view('profiles.index' ,[
            'users' => $users
        ]);
    }
    public function detail()
    {
        return view ('details.index');
    }
}
