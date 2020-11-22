<?php

namespace App\Http\Controllers;

use App\User;
use App\User as AppUser;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function index(){        
        $query = User::with('roles')->get();
        dd($query);
        
    }
}
