<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user_id = Auth::user()->id;         
        $role = Role::with('users')->where('id', $user_id)->first();
        switch ($role->name) {
            case "admin":
                return view('admin');
              break;
            case "user":
                return view('user');
              break;            
          }
    }
}
