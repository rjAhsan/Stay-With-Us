<?php

namespace App\Http\Controllers;

use App\FeedBack;
use Illuminate\Http\Request;
use Auth;
use Alert;
class FeedBackController extends Controller
{
   
    
    public function create(Request $request)
    {
        $user=Auth::User()->id;
        
        $data= new FeedBack();
        $data->description=$request->get('description');
        $data->user_id=$user;
        
        if($data->save()){
            alert()->success('feedback Added.', 'Congrats!');
            return redirect()->back();
        }
        alert()->error('FeedBack Not Added', 'Error');
        return redirect()->back();
      
    }

    public function updatefeedback(Request $request){
       if(Feedback::find($request->get('id'))->update($request->all())) 
       {
        alert()->success('feedback Updated.', 'Congrats!');
            return redirect()->back();
       }
       alert()->error('FeedBack Not Updated', 'Error');
        return redirect()->back();;
    }
  
}
