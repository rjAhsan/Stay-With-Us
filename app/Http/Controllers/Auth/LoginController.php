<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |----------------------------------------               ----------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



  


    public function login(Request $request)
    {

        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

      

        if (Auth::guard()->attempt(['email' => $request->email, 'password' => $request->password,'active'=>1], $request->get('remember')) ) {
            //  dd(Auth::User()->active);   

               
                    if(Auth::User()->role->name==="Host"){
                        return redirect()->intended('/host');
                    }
                    elseif(Auth::User()->role->name==="Guest"){
                        return redirect()->intended('/guest');
                    }
                    elseif(Auth::User()->role->name=="Admin"){
                        return redirect()->intended('/admin');
                    }
                 else{
                    throw ValidationException::withMessages([
                        $this->username() => [trans('auth.Blocked')],
                    ]);
                }
                
            
           
        }
        return $this->sendFailedLoginResponse($request);


        // return $this->guard()->attempt( $this->credentials($request), $request->filled('remember')
        // );
    
    }
}
