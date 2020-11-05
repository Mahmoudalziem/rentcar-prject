<?php

namespace App\Http\Controllers;
use App\Admin;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function settings(){


        return view('admin/settings');
    }

    public function updateSettings(Request $request){
        
        if($request->has('password')){

            $password = $request->password;

            Admin::first()->update([

                'password' => bcrypt($password)
            ]);
        }
        
    }
}
