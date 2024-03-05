<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('Front.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
          
        $user = Auth()->user();

   
        if ($user->role === "admin") {
            return redirect()->route('Dashboard_admin')->with("flash_message" , "Welcome  $user->name");
    
           } elseif ($user->role === "Organisateur") {

            return redirect()->route('Dashboard_Organisateur')->with("flash_message" , "Welcome  $user->name") ;

        }else {
            return redirect()->route('home')->with("flash_message" , "Welcome  $user->name") ;
        } 

    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
