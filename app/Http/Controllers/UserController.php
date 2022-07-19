<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

   
  


    public function Create(){

        

        return view('user.users');
    }


    public function Get(){
        
        $users = User::all();
        return view ('user.users')->with('users', $users);
    
    }

}
