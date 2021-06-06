<?php

namespace App\Http\Controllers;
use App\Car;      
use App\Pilot;  
use App\Brand;    
use Illuminate\Http\Request;   
   
class homeController extends Controller
{
    public function home(){

        $cars = Car::all();
              

        return view('pages.home', compact('cars'));   
    }         

    public function show($id)
    {   
        
        $pilot = Pilot::findOrFail($id);      

        return view('pages.show', compact('pilot'));         
    }
    
    public function carShow($id)
    {   
        
        $car = Car::findOrFail($id);      

        return view('pages.carShow', compact('car'));            
    }

    public function create(){

        $brands = Brand::all();
        $pilots = Pilot::all();
        return view('pages.create', compact('brands','pilots'));   
    }     
    
    public function stock(Request $request){

        $validated = $request -> validate([   

            'name' => 'required|string|min:3'  ,     
            'model' => 'required|string|min:2' ,   
            'kw' => 'required|integer|max:2000' 
        ]);   

        $brand = Brand::findOrFail($request -> get('brand_id'));
        // $pilot = Pilot::findOrFail($request -> get('pilot_id'));

        $car = Car::make($validated);      
        $car ->brand() -> associate($brand);
        $car -> save();   

        $car -> pilots() -> attach($request -> get('pilots_id'));
        $car -> save();      
        return redirect() -> route('home');         
              
    }
       
}   