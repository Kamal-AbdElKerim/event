<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\categorie;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
   
    function __construct()
    {
     
        // $this->middleware(['permission:Add_Events'],['except' => ['chose_abonnement','buy_aboonement','checkTrialPeriod']]);
        $this->middleware(['permission:Add_Events'], ['only' => ['Dashboard','form_Add_Events','add_event','form_update_event','Update_event','delete_event']]);
        // $this->middleware(['permission:product-edit'], ['only' => ['edit', 'update']]);
        // $this->middleware(['permission:product-delete'], ['only' => ['destroy']]);
    }
    
    public function Dashboard()
    {
        $reservations = reservation::join('events', 'reservations.event_id', '=', 'events.id')
        ->join('users', 'reservations.user_id', '=', 'users.id')
        ->where('events.organizer_id', auth()->id())
        ->select('reservations.*', 'events.title','users.name','users.reservation_approval')
        ->orderBy('reservations.created_at', 'desc')
        ->paginate(8);
        $reservations_conut = reservation::join('events', 'reservations.event_id', '=', 'events.id')
        ->join('users', 'reservations.user_id', '=', 'users.id')
        ->where('events.organizer_id', auth()->id())
        ->select('reservations.*', 'events.title','users.name','users.reservation_approval')
        ->orderBy('reservations.created_at', 'asc')
        ->get();
        // dd($reservations_conut->quantity);
       return view('Dashboard.Dashboard_Organisateur',compact('reservations','reservations_conut'));
    }
    public function Ajax_Search(Request $request)
    {
        if ($request->ajax()) {
            $searchByTitle = $request->SearchByTiltle;
            $page = 1 ;
            $category = Categorie::where("name", "like", "%{$searchByTitle}%")->first();
    
            if (empty($category)) {
                $events = event::where("title", "like", "%{$searchByTitle}%")->where('validation_status', 'approved')->orderBy("id", "desc")->paginate($page);
            } else {
                $events = event::where("category_id", "=", $category->id)->where('validation_status', 'approved')->orderBy("id", "desc")->paginate($page);
            }
    
            if (empty($searchByTitle)) {
                $events = Event::orderBy("id", "desc")
                ->where('validation_status', 'approved')
                ->paginate($page);    
            }
    
            return view('Front.ajax.event_ajax', compact('events'));
        }
    }


    public function events()
    {
        $events = event::where('validation_status', 'approved')->paginate(3);
        $categories = categorie::all();

        return view('Front.events', compact('events','categories'));
    }

    public function events_single($id)
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
                            
                           
                           

        return view('Front.event_single', compact('event','totalQuantity'));
      
    }



    public function form_Add_Events()
    {
          // Read JSON file
          $json = file_get_contents(storage_path('app/cities.json'));

          // Decode JSON data
          $citys = json_decode($json);


        $categories = categorie::all();
        $Events = Event::where('organizer_id',Auth()->id())->get();

        
       return view('Dashboard.event.form_Add_Events',compact('categories','citys','Events'));
    }

 

    /**
     * Store a newly created resource in storage.
     */
    public function add_event(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|integer',
            'city' => 'required|string|max:255',
            'Date_start' => 'required|date_format:Y-m-d\TH:i',
            'Date_end' => 'required|date_format:Y-m-d\TH:i|after_or_equal:Date_start',
            'Nombre_De_Places' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        
        $start = strtotime($request->Date_start);
        $end = strtotime($request->Date_end);
        
        if ($start > $end) {
            return redirect()->back()->withErrors(['Date_end' => 'The end date must be equal to or after the start date.'])->withInput();
        }
    
        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->category_id = $request->category_id;
        $event->organizer_id = Auth()->id();
        $event->city = $request->city;
        $event->Date_start = $request->Date_start;
        $event->Date_end = $request->Date_end;
        $event->Nombre_De_Places = $request->Nombre_De_Places;
        $event->save();
    
        return redirect()->back()->with("flash_message", "Event created successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function form_update_event(Request $request,$id)
    {
        $event = event::find($id);
      
        $json = file_get_contents(storage_path('app/cities.json'));

        $citys = json_decode($json);
      $categories = categorie::all();
    
        if ($event) {
            return view('Dashboard.event.Update_Events',compact('event','citys','categories'));
        } else {
            return redirect()->back()->with("flash_message_false", "event not found ");
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function Update_event(Request $request, $id)
    {
      // Validation rules
        $rules = [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'city' => 'required|string',
            'Date_start' => 'required|date',
            'Date_end' => 'required|date|after_or_equal:Date_start',
            'Nombre_De_Places' => 'required|integer',
        ];

        // Custom validation messages
        $messages = [
            'Date_end.after_or_equal' => 'The end date must be after or equal to the start date.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        // Redirect back if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // If validation passes, update the event
        $event = Event::findOrFail($id);
        $event->title = $request->input('title');
        $event->description = $request->input('description');
        $event->category_id = $request->input('category_id');
        $event->city = $request->input('city');
        $event->Date_start = $request->input('Date_start');
        $event->Date_end = $request->input('Date_end');
        $event->Nombre_De_Places = $request->input('Nombre_De_Places');
        $event->save();

        // Redirect to a confirmation page or elsewhere
        return redirect()->route('form_Add_Events')->with("flash_message", $request->input('title') . " is updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete_event($id)
    {
        $event = event::find($id);
    
        if ($event) {
            $eventName = $event->name;
    
            $event->delete();
    
            return redirect()->back()->with("flash_message", "$eventName is deleted successfully");
        } else {
            return redirect()->back()->with("flash_message", "event not found or already deleted");
        }
    }
}
