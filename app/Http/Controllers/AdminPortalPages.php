<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Alert;
class AdminPortalPages extends Controller
{

   
    public function profile(){
        $user=Auth::User();
       
        return view('Portal.admin-views.admin-profile',['user'=>$user]);

    }

    public function rating(){
        return view('Portal.admin-views.admin-rating-view');
    }

    public function changepassword(){
        return view('Portal.admin-views.admin-change-password');
    }

    public function users(){

        $users=User::orderBy('id', 'DESC')->paginate(10);
        return view('Portal.admin-views.users-mangment',['users'=>$users]);
    }

    public function dashboard(){
        return view('Portal.admin-views.admin-dashboard');
    }
}

