<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\FeedBack;
use App\Meal;
use App\vehicle;
use App\Location;
use App\Reservation;
class HostPortalPages extends Controller
{
    public function dashboard(){
        return view('Portal.host-views.host-dashboard');
    }

    
    public function profile(){  
        $user=Auth::User();
        return view('Portal.host-views.host-profile',['user'=>$user]);
    }


    public function food(){
        // $user=Auth::User()->id;
        // $meals=Meal::where('user_id',$user)->get();

        $meals=Auth::User()->meals;
         

        return view('Portal.host-views.host-food',['meals'=>$meals]);
    }


    public function vehicle(){
        // $user=Auth::User()->id;
        // $vehicle=vehicle::where('user_id',$user)->get();
         $vehicle=Auth::User()->vehicles;

        return view('Portal.host-views.host-vehicle',['vehicles'=>$vehicle]);
    }


    public function location(){
        // $user=Auth::User()->id;
        // $location=Location::where('user_id',$user)->get();
        // $vehicleselect=vehicle::where('user_id',$user)->get();
        // $mealselect=Meal::where('user_id',$user)->get();
        $location=Auth::User()->locations;
        $vehicleselect=Auth::User()->vehicles;
        $mealselect=Auth::User()->meals;
        return view('Portal.host-views.host-location',['mealselect'=>$mealselect,'vehicleselect'=>$vehicleselect,'locations'=>$location]);
    }

    public function reservation(){
        $host_id=Auth::User()->id;
        $resvers=Reservation::where('host_id','=',$host_id)->get();
        
        
        return view('Portal.host-views.host-reservation',['resvers'=>$resvers]);
    }


    public function addpayments(Request $request){
      

        if($request->has('advance')){
        
            $res=Reservation::Where('id',$request->id)->first();
       
            $res->advance=$request->get('advance');
            $res->status='process';
            $res->update();
            return redirect()->back();

        }
        elseif($request->has('balance')){
           
            $res=Reservation::Where('id',$request->id)->first();
            $res->balance=$request->get('balance');
            $res->status='completed';
            $res->update();
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }

    public function notification(){
        return view('Portal.host-views.host-notification');
    }


    public function feedback(){
        $user=Auth::User()->id;
        $data=FeedBack::where('user_id',$user)->get();
        $username=Auth::User()->name;
        return view('Portal.host-views.host-feedback',['feedbacks'=>$data,'username'=>$username]);
    }

    public function rating(){
        return view('Portal.host-views.host-rating');
    }

    public function changepassword(){
        return view('Portal.host-views.host-change-password');
    }
}
