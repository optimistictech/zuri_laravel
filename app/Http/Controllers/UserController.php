<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

   
  


    public function Create(){

    
        $user = User::create(([
            'name' =>'Kolawole', 
            'email' => 'adeola@gmail.com',
            'phone' => '08098776788'
        ]));
        
        return redirect('user/all')->with('flash_message', 'User Addedd!');  
    }


    public function Get(){
        
        $users = User::all();
        return view ('user.users')->with('users', $users);
    
    }

    public function Edit($id){

        $user=User::find($id);
        return view('user.edit')->with('user', $user);

    }

    public function Update(Request $request, $id){


        $user = user::find($id);
        $input = $request->all();
        $user->update($input);

        return redirect('user/all')->with('status', 'User Updated!'); 

    }


    public function Destroy($id)
    {
        User::destroy($id);
        return redirect('user/all')->with('status', 'User deleted!');  
    }

}
