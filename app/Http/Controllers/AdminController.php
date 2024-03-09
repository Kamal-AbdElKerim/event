<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\admin;
use App\Models\event;
use App\Models\categorie;
use App\Models\reservation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function __construct()
    {
     
        $this->middleware(['permission:Dashboard_admin']);
        // $this->middleware(['permission:chose_abonnement'], ['only' => ['chose_abonnement','buy_aboonement','checkTrialPeriod']]);
        // $this->middleware(['permission:product-edit'], ['only' => ['edit', 'update']]);
        // $this->middleware(['permission:product-delete'], ['only' => ['destroy']]);
    }

    public function Dashboard()
    {
        $users = User::withTrashed()->where('role','User')->paginate(10);
        $events = event::all();
        $reservations = reservation::all();
        $categories = categorie::all();
        return view('Dashboard.Dashboard_Admin', compact('users','events','reservations','categories'));

    }


    // public function List_Users()
    // {
    //     return view('Dashboard.List_Users');

    // }

    /**
     * Show the form for creating a new resource.
     */
    public function List_evenements()
    {
        $events = Event::latest()->get();
        return view('Dashboard.evenement.evenements',compact('events'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function approved_event($id)
    {
        $event = event::findOrFail($id);
        $event->validation_status = 'approved'; 
        $event->save();
    
        return redirect()->back()->with("flash_message", $event->title . " has been approved");
    }

    /**
     * Display the specified resource.
     */
    public function rejected_event($id)
    {
        $event = event::findOrFail($id);
        $event->validation_status = 'rejected'; 
        $event->save();
    
        return redirect()->back()->with("flash_message", $event->title . " has been rejected");
    }

    public function delete_user($id){

        User::find($id)->delete();

        return redirect()->back()->with("flash_message",  "access is lock");

    }

    public function restore_user($id){

        $record = User::withTrashed()->find($id);
        $record->restore();

        return redirect()->back()->with("flash_message",  "access is unlock");

    }

 
}
