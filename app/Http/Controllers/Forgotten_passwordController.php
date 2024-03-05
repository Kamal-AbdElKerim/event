<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Forgotten_passwordController extends Controller
{
    public function Reste_Passwored(){
        
        return view('Front.Reste_Passwored');

    }

    public function subment_Reste_Passwored(Request $request){

        $user = User::where('email', $request->email)->first();

        if (!empty($user)) 
        {
           $user->remember_token = Str::random(40);
           $user->save();
        }else {
            return redirect()->back()->with("flash_message_false" , "email not found");
        }

    }
}
