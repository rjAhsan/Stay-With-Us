<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/







//Protected Routes


Route::group(['middleware' => ['auth','activeUser']], function () {
    
    Route::post('/changeuserpassword','changePassword@ChangeUserPassword');
    Route::post('addfeedback','FeedBackController@create');
    Route::post('edit-user','AdminRegisterUser@editUser');
    Route::post('edit-feedback','FeedBackController@updatefeedback');

    
    Route::group(['middleware' => ['isAdmin']], function () {
        Route::get('/admin', function () {
            return view('Portal.admin-views.default');
        });
        Route::get('/admin-dashboard','AdminPortalPages@dashboard');
        Route::get('/user-mangment','AdminPortalPages@users');
        Route::get('/admin-change-password','AdminPortalPages@changepassword');
        Route::get('/view-rating','AdminPortalPages@rating');
        Route::get('/admin-profile','AdminPortalPages@profile');
        Route::post('registeruser','AdminRegisterUser@registeruser');
        Route::get('block-user/{id}','AdminRegisterUser@usercheck');
    });

    
    Route::group(['middleware' => ['isGuest']], function () {
        Route::get('/guest', function () {
            return view('Portal.guest-views.default');
        });

        Route::get('/guest-dashboard','GuestPortalPages@dashboard');
        Route::get('/guest-profile','GuestPortalPages@profile');
        Route::get('/guest-booking','GuestPortalPages@booking');
        Route::get('/guest-notificatons','GuestPortalPages@notifications');
        Route::get('/guest-feedback','GuestPortalPages@feedback');
        Route::get('/guest-rating','GuestPortalPages@rating');
        Route::get('/guest-change-password','GuestPortalPages@changepassword');
       
       
        
        
        //HomePageController//

        Route::any('/addreservation','HomePageController@addbooking');
        Route::post('/cart','HomePageController@addtocart');


        // GuestController

        Route::post('addbooking','GuestPortalPages@addbooking');
        Route::get('/confrim/{booking}','GuestPortalPages@confrim');


        
    });

    
    Route::group(['middleware' => ['isHost']], function () {
        Route::get('/host', function () {
            return view('Portal.host-views.default');
        });

        Route::get('/host-dashboard','HostPortalPages@dashboard');
        Route::get('/host-profile','HostPortalPages@profile');
        Route::get('/host-food','HostPortalPages@food');
        Route::get('/host-vehicle','HostPortalPages@vehicle');
        Route::get('/host-location','HostPortalPages@location');
        Route::get('/host-reservation','HostPortalPages@reservation');
        Route::get('/host-notification','HostPortalPages@notification');
        Route::get('/host-feedback','HostPortalPages@feedback');
        Route::get('/host-rating','HostPortalPages@rating');
        Route::get('/host-change-password','HostPortalPages@changepassword');
        
        Route::post('edit-meal','MealController@editmeal');
        Route::post('addmeal','MealController@addmeal');
        Route::post('addvehicle','VehicleController@addvehicels');
        Route::post('edit-vehicle','VehicleController@editvehicels');
        Route::post('addlocation','LocationController@addlocation');
        Route::post('edit-location','LocationController@editlocation');
        Route::post('/addpayments','HostPortalPages@addpayments');


   
    });

    

    
    
});

Route::get('/Not-Allowed', function () {
    echo "Sorry You Have NO Authrization for This  Page";
 });

// MainHomePageRoute
Route::get('/','HomePageController@MainHome');

Route::get('/about-us','HomePageController@AboutUs');
Route::get('/contact-us','HomePageController@ContactUs');
Route::get('/polices','HomePageController@Policies');
Route::get('/welcom','HomePageController@Policies');
Route::get('/location-list','HomePageController@loctions');
Route::get('/location-details','HomePageController@locationdetails');
Route::post('/findlocation','HomePageController@searchlocation');
Route::get('/locations-explore/{id}','HomePageController@explor');






Auth::routes();
 
Route::get('/home', 'HomeController@index')->name('home');

