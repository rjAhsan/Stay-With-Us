<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Alert;
class AdminRegisterUser extends Controller
{
    public function registeruser(Request $data)
    {

        $validatedData = $data->validate([
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],

        ]);

           
         User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'password' => bcrypt($data['password']),
            'role_id'=>$data['role_id']
        ]); 
        alert()->success('User Created.', 'Congrats!');
        return redirect()->back();

    }


    public function usercheck(Request $request){
     $user=User::where('id',$request->id)->first();
     
     if($user->active){
         $user->active=0;
         $user->save();
         alert()->error('User Blocked.', 'This Use has Been Blocked');
         return redirect()->back();
     }
     else{
        $user->active=1;
        $user->save();
        alert()->success('User Activated.', 'Congrats!');
        return redirect()->back();
     }


    }

    public function editUser(Request $request){
        if(User::find($request->get('id'))->update($request->all())){
                
        alert()->success('Profile Updated .', 'Congrats!');
        return redirect()->back();
        }
        
        alert()->error('NOt.', 'Profile NOt Update');
        return redirect()->back();

    }



}
