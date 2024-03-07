<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\event;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Dashboard()
    {
        return view('Dashboard.Dashboard_Admin');

    }


    public function List_Users()
    {
        return view('Dashboard.List_Users');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function List_evenements()
    {
        $events = event::all();
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admin $admin)
    {
        //
    }
}
