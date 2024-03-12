<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function List_reservations()
    {
        $reservations = reservation::join('events', 'reservations.event_id', '=', 'events.id')
        ->join('users', 'reservations.user_id', '=', 'users.id')
        ->where('events.organizer_id', auth()->id())
        ->select('reservations.*', 'events.title','users.name','users.reservation_approval')
        ->orderBy('reservations.created_at', 'desc')
        ->paginate(8);

        // dd($reservations);
    

        return view('Dashboard.List_reservations',compact('reservations'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function add_reservation(Request $request , $id)
    {

        $event = event::where('id', $id)->first();
      
      

        $totalQuantity = reservation::select( DB::raw('SUM(quantity) AS TotalQuantity'))
                            ->where('event_id', $event->id)
                            ->groupBy('event_id')
                            ->first();

                            if (!$totalQuantity) {
                                $totalQuantity = new \stdClass(); 
                                $totalQuantity->TotalQuantity = 0; 
                            
                            }
       if ($event->Nombre_De_Places - $totalQuantity->TotalQuantity >= 0) {

        if ( $event->user->reservation_approval === 'automatic') {
            $status = 1 ;
        } elseif ($event->user->reservation_approval === 'manual') {
            $status = 0 ;
        }
        // dd($event->user->reservation_approval);
        reservation::create([
            'event_id' => $id,
            'user_id' =>  Auth()->id(),
            'quantity' => $request->quantity,
            'status' => $status,
        ]);
       }                     
      
   

        return redirect()->back()->with("flash_message", "Event has buy");

    }

    /**
     * Display the specified resource.
     */
    public function accept_reserv($id)
    {
       $reservation = reservation::find($id);
    //    dd($reservation);

       if ($reservation) {

        $reservation->status = 1;
    
        $reservation->save();
    }
    return redirect()->back()->with("flash_message", "reservation has accepter");

    }
    public function refuser_reserv($id)
    {
       reservation::find($id)->delete();
   
    return redirect()->back()->with("flash_message", "reservation has refuser");

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function change_Switch(Request $request)
    {
        $request->validate([
            'reservation_approval' => 'required|in:automatic,manual'
        ]);
    
        $user = auth()->user();
    
        $newApprovalValue = $request->input('reservation_approval') === 'automatic' ? 'manual' : 'automatic';
    
        $user->reservation_approval = $newApprovalValue;
        $user->save();
    
        $flashMessage = $newApprovalValue === 'automatic' ? 'Validation is automatic' : 'Validation is manual';
    
        return redirect()->back()->with('flash_message', $flashMessage);
    }
    

   
}
