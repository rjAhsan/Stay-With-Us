<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\FeedBack;
use App\Booking;
use App\Location;
use App\Reservation;
use Carbon\Carbon;

class GuestPortalPages extends Controller
{


    public function addbooking(Request $request){
        if(Auth::User()->role_id===2){
            $user=Auth::User()->id;

            //Please Check This 
            $guest=Location::findOrFail($request->get('location_id'))->user_id;
           
            $booking=new Booking();
            $booking->check_in=$request->get('check_in');
            $booking->check_out=$request->get('check_out');
            $booking->location_id=$request->get('location_id');
            $booking->user_id=$user;
            $booking->guest_id=$guest;
            $booking->save();
            return redirect('/');

        } 

       


    }




    public function dashboard(){
        return view('Portal.guest-views.guest-dashboard');
    }

    public function profile(){  
        $user=Auth::User();
        return view('Portal.guest-views.guest-profile',['user'=>$user]);
    }

  

    public function confrim(Request $request,Booking $booking){
        $res=new Reservation();
        
        // dd($booking->id);
        //dd($booking()->check_in);
        //dd(Booking::find($booking->id)->location);
        $checkin = Carbon::parse($booking->check_in);
        $checkout = Carbon::parse($booking->check_out);
        $diff = $checkin->diffInDays($checkout);
        $total=$diff * $booking->location->rate;
        
        $res->check_in=$booking->check_in;
        $res->check_out=$booking->check_out;
        $res->location_id=$booking->location_id;
        //Some- Migration Name Mistae IN Booking Tabel Guset_is is Wrong Please corect With Host_id
        $res->host_id=$booking->guest_id;
        //Thanks
        $res->guest_id=$booking->user_id;;
        $res->total_amount=$total;
        $res->status='pending';
        $res->booking_id=$booking->id;
        $res->save();

       //Save booking data in reseration tabele
        
        $booking->status=true;
        $booking->save();
        return redirect()->back();
       
       //save data to booking as conffrimed or cancel ;
        




    }

    public function booking(Request $request){
       
        if(Auth::User()->role_id===2){
         $user=Auth::User()->id;
         $bookings=Booking::Where('user_id',$user)->Where('status',null)->get();
  
       return view('Portal.guest-views.guest-booking',['bookings'=>$bookings]);
    
        }
        return view('Portal.guest-views.guest-booking',['bookings'=>$bookings=null]);
        
    }

    public function notifications(){
        return view('Portal.guest-views.guest-notification');
    }

    public function feedback(){

      //  $user=Auth::User()->id;
        $data=Auth::User()->feedbacks;
         $username=Auth::User()->name;
        

        return view('Portal.guest-views.guest-feedback',['feedbacks'=>$data,'username'=>$username]);
    }

    public function rating(){
        return view('Portal.guest-views.guest-rating');
    }

    public function changepassword(){
        return view('Portal.guest-views.guest-change-password');
    }
}
