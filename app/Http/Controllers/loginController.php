<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function access(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => ['required','string'],
        ]);


        if ($request->has('email') && $request->exists('password') || $request->has('remember')) {

            $email = $request->input('email');

            $password = $request->input('password');

            $remember = $request->has('remember') ? true : false;

            $user = User::where('email', $email)->first();

            if (Auth::guard('webAdmin')->attempt(['email' => $email, 'password' => $password],$remember)) {

                return redirect('admin');

            }else if($user && $user->account_active != '1'){

                return back()->with('error', 'Please Active Your Account');

            }else if (Auth::guard('web')->attempt(['email' => $email, 'password' => $password, 'account_active' => '1'],$remember)) {

                return redirect('profile');

            } else {

                return back()->with('error' , 'Email Or Password Not Valid');
            }
        } else {

            return back();
        }
    }

}
