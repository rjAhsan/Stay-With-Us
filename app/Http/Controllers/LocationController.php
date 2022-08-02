<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use Auth;
class LocationController extends Controller
{
    public function addlocation(Request $request){
        $location=new Location();
        $user_id=Auth::User()->id; 
        $location->title=$request->get('title');
        $location->type=$request->get('type');
        $location->capasity=$request->get('capasity');
        $location->beds=$request->get('beds');
        $location->city=$request->get('city');
        $location->description=$request->get('description');
        $location->address=$request->get('address');
        $location->pin=$request->get('pin');
        $location->rate=$request->get('rate');
        $location->policy=$request->get('policy');
        $location->img_url=$request->get('img_url');
        $location->meal_id=$request->get('meal_id');
        $location->vehicle_id=$request->get('vehicle_id');
        $location->user_id=$user_id;
        $location->save();
        return redirect()->back();

    }

    public function editlocation(Request $request){
        Location::find($request->get('id'))->update($request->all());
        return redirect()->back();;

    }
}
