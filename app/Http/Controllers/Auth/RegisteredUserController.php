<?php

namespace App\Http\Controllers\Auth;

use App\Models\role;
use App\Models\User;
use App\Models\model_has_role;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('Front.auth.SignUp');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required', 'string'],
            'adresse' => ['required', 'string', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'statue' => 1,
            'adresse' => $request->adresse,
            'password' => Hash::make($request->password),
        ]);

        $lastInsertedId = $user->id;
        if ($request->role === "Organisateur") {
            $role = role::where('name','Organisateur')->first() ;
  
            $mo =  model_has_role::create([
                 'role_id' => $role->id,
                 'model_type' => "App\Models\User",
                 'model_id' => $lastInsertedId,  
              
             ]);
        }
  
      
        
        event(new Registered($user));

        Auth::login($user);

        $user = Auth()->user();

        if ($user->role === "admin") {
            return redirect()->route('Dashboard_admin')->with("flash_message" , "Welcome  $user->name");
    
           } elseif ($user->role === "Organisateur") {

            return redirect()->route('Dashboard_Organisateur')->with("flash_message" , "Welcome  $user->name") ;

        }else {
            return redirect()->route('home')->with("flash_message" , "Welcome  $user->name") ;
        } 
         
    }
}
