<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{

    function __construct()
    {
     
        $this->middleware(['permission:Add_Category']);
        // $this->middleware(['permission:chose_abonnement'], ['only' => ['chose_abonnement','buy_aboonement','checkTrialPeriod']]);
        // $this->middleware(['permission:product-edit'], ['only' => ['edit', 'update']]);
        // $this->middleware(['permission:product-delete'], ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function form_Add_Category()
    {
        $categories = categorie::all();
        return view('Dashboard.Categorie.form_Add_Category',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function add_Category(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:categories', 
        ]);
    

         Categorie::create([
            'name' => $validatedData['name']
        ]);
    

        return redirect()->back()->with("flash_message", "$validatedData[name] is added successfully");
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function delete_categorie($id)
    {
        $category = Categorie::find($id);
    
        if ($category) {
            $categoryName = $category->name;
    
            $category->delete();
    
            return redirect()->back()->with("flash_message", "$categoryName is deleted successfully");
        } else {
            return redirect()->back()->with("flash_message", "Category not found or already deleted");
        }
    }
    

    /**
     * Display the specified resource.
     */
    public function form_update_categorie($id)
    {
        $category = Categorie::find($id);
    
        if ($category) {
            return view('Dashboard.Categorie.Delete_Category',compact('category'));
        } else {
            return redirect()->back()->with("flash_message", "Category not found ");
        }


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update_Category(Request $request,$id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name,' . $request->id, 
        ]);
    
        $category = Categorie::findOrFail($id);
    
        $category->update([
            'name' => $validatedData['name']
        ]);
    
        return redirect()->route('form_Add_Category')->with("flash_message", $validatedData['name'] . " is updated successfully");
    }
    

}
