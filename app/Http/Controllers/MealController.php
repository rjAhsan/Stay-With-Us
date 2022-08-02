<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;
use Auth;
class MealController extends Controller
{
    public function addmeal(Request $request){
        $user_id=Auth::User()->id; 
        $meal= new Meal();
        $meal->catageroy=$request->get('catageroy');
        $meal->breakfast=$request->get('breakfast');
        $meal->lunch=$request->get('lunch');
        $meal->dinner=$request->get('dinner');
        $meal->price=$request->get('price');
        $meal->user_id=$user_id;
        $meal->save();
        return redirect()->back();

    }


    public function editmeal(Request $request){
        Meal::find($request->get('id'))->update($request->all());
        return redirect()->back();;
    }


}
