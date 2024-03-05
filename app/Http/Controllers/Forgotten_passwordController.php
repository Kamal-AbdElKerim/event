<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\ForgotpasswordMail;
use Illuminate\Support\Facades\Mail;

class Forgotten_passwordController extends Controller
{
    public function Reste_Passwored(){
        
        return view('Front.Reste_Passwored');

    }

    public function subment_Reste_Passwored(Request $request){

        // Find the user by email
        $user = User::where('email', $request->email)->first();
    
        if (!empty($user)) 
        {
            // Generate a new remember token
            $user->remember_token = Str::random(40);
            // Save the user
            $user->save();
    
            // Send the password reset email
            Mail::to($user->email)->send(new ForgotpasswordMail($user));
    
            // Redirect back with a success message
            return redirect()->back()->with("flash_message_true" , "Please check your email");
    
        } else {
            // Redirect back with a message indicating the email was not found
            return redirect()->back()->with("flash_message_false" , "Email not found");
        }
    
    }
    
}
