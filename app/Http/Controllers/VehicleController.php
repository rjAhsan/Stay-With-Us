<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Vehicle;
class VehicleController extends Controller
{
    public function addvehicels(Request $request){
        $user_id=Auth::User()->id; 
        $vehicel= new vehicle();
        $vehicel->Name=$request->get('Name');
        $vehicel->Model=$request->get('Model');
        $vehicel->Type=$request->get('Type');
        $vehicel->img_url=$request->get('img_url');
        $vehicel->terms=$request->get('terms');
        $vehicel->fair=$request->get('fair');
        $vehicel->user_id=$user_id;
        $vehicel->save();
        return redirect()->back();

    }



    public function editvehicels(Request $request){
        Vehicle::find($request->get('id'))->update($request->all());
        return redirect()->back();;
    }
}
