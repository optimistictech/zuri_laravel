<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

   
  


    public function Create(){

    
        $user = User::create(([
            'name' =>'Olaoro', 
            'email' => 'olaoro@gmail.com',
            'phone' => '08131157998'
        ]));
        
        return redirect('user/all')->with('flash_message', 'User Addedd!');  
    }


    public function Get(){
        
        $users = User::all();
        return view ('user.users')->with('users', $users);
    
    }

}
