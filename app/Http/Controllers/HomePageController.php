<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Meal;
use App\Vehicle;
use Carbon\Carbon;
use Auth;
class HomePageController extends Controller
{
    public function MainHome(){
        return view('Home.MainHome');
    }


    
    public function AboutUs(){
        return view('Home.About-Us');
    }
    
    public function ContactUs(){
        return view('Home.Contact-Us');
    }
    
    public function Policies(){
        return view('Home.Polices');
    }
    
    public function loctions(){
        return view('Home.Locations-list');
    }
    
    public function locationdetails(){
        return view('Home.Location-details');
    }


    public function addtocart(Request $request){
        return view('Home.cart');
    }


    public function addbooking(Request $request){
        
        // echo Carbon::now();
        
        if(Auth::User()->role_id===2){
            $checkin = Carbon::parse($request->check_in);
            $checkout = Carbon::parse($request->check_out);
            $diff = $checkin->diffInDays($checkout);
            $location=Location::findOrFail($request->location_id);    
            $total_Amount=$diff * $location->rate;
    
            return view('Home.cart',['location'=>$location,'check_in'=>$checkin,'check_out'=>$checkout ,'days'=>$diff,'total_amout'=>$total_Amount]);
       
        }
        else {
            return view('Home.cart',['location'=>$location=null]);
       
        } 
    }

    public function explor(Request $request){
        // dd($request->id);
        $location=Location::findOrFail($request->id);
       
        $mealdata=$location->meal_id;
        $vehicledata=$location->vehicle_id;
       
        
       if((empty($vehicledata))&&(!empty($mealdata))){
            $meal=Meal::findOrFail($mealdata);
            return view('Home.Location-details',['meal'=>$meal,'location'=>$location]);
        }
        
        elseif((!empty($vehicledata))&&(empty($mealdata))){
           $vehicel=Vehicle::findOrFail($vehicledata);
           return view('Home.Location-details',['vehicle'=>$vehicel,'location'=>$location]);
        }

        elseif((empty($vehicledata))&&(empty($mealdata))){
            return view('Home.Location-details',['location'=>$location]);
        }

        elseif((!empty($vehicledata))&&(!empty($mealdata))){
            $vehicel=Vehicle::findOrFail($vehicledata);
            $meal=Meal::findOrFail($mealdata);
            return view('Home.Location-details',['meal'=>$meal,'vehicle'=>$vehicel,'location'=>$location]);
        }
       else{
        return view('Home.Location-details',['location'=>$location]);
       }




    }




    public function searchlocation(Request $request){
        $facilty=$request->get('facilty');
        $capasity=$request->get('capasity');
        $type=$request->get('type');
        $city=$request->get('city');

        //With Food id=1
        if($facilty==1){
           $data=Location::whereNotNull('meal_id')
                 ->where('city','=',$city)
                 ->where('type','=',$type)
                 ->where('capasity','=',$capasity)
                 ->get();
        return  view('Home.Locations-list',['locations'=>$data]); 
     


        }



        //With Vehicle 
        
        elseif($facilty==2){
            $data=Location::whereNotNull('vehicle_id')
            ->where('city','=',$city)
            ->where('type','=',$type)
            ->where('capasity','=',$capasity)
            ->get();
            return  view('Home.Locations-list',['locations'=>$data]);

          
        }




        // With Food And Vehicle
        
        elseif($facilty==3){
            $data=Location::whereNotNull('meal_id')
            ->whereNotNull('vehicle_id')
            ->where('city',$city)
            ->where('type',$type)
            ->where('capasity',$capasity)
            ->get();
            return  view('Home.Locations-list',['locations'=>$data]);
        

        }



        // Without Food And Vehicle

        
        elseif($facilty==4){
            $data=Location::whereNull('meal_id')
            ->whereNull('vehicle_id')
            ->where('city',$city)
            ->where('type',$type)
            ->where('capasity',$capasity)
            ->get();
            return  view('Home.Locations-list',['locations'=>$data]);

            
        }

        else{
            dd('HHAHAHAH');
        }


    }
    
    
    
}
