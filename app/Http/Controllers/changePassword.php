<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Alert;
class changePassword extends Controller
{
    public function ChangeUserPassword(Request $request){
        $user = Auth::User();
        $validated = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6',
        ]);

        if($request->get('new_password')===$request->get('confrim_password'))
            {
                if (Hash::check($request->get('current_password'), $user->password)) {
                    $user->password = bcrypt($request->get('new_password'));
                    $user->save();
                    alert()->success('Password Changed.', 'Congrats!');
                    return redirect()->back();
                }

                else {
                    alert()->error('Password Not Change', 'Incorrect Password enter');
                    return redirect()->back();
                }
            }
            else {
                alert()->error('Password ', 'Confrim Password Not Match');
                return redirect()->back();
            }
        
}

}
