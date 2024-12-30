<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Trip;
use App\Models\Van;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $trips= Trip::paginate(10);
        

        return view('admin.trip.index',[
            'trips'=>$trips,
           
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $vans=Van::all();
        $drivers=Driver::all();
        return view('admin.trip.create',[
            'vans'=>$vans,
            'drivers'=>$drivers,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'vanId'=> 'required',
            'driverId'=> 'required',
            'destination'=> 'required|string|max:225',
            'placeOfOrigin'=> 'required|string|max:225',
            'departureTime'=> 'required|string|max:225',
            'arrivalTime'=> 'required|string|max:225',
            'price'=> 'required',
            
           
           ]);
    
           Trip::create([
            'vanId'=>$request->vanId,
            'driverId'=>$request->driverId,
            'destination'=>$request->destination,
            'placeOfOrigin'=>$request->placeOfOrigin,
            'departureTime'=>$request->departureTime,
            'arrivalTime'=>$request->arrivalTime,
            'price'=>$request->price,
            
            
    
           ]);
    
           return redirect('/admin/trip')->with('status', 'Trip Details Saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trip $trip)
    {
        
        return view('admin.trip.show', compact('trip'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trip $trip)

    {
        $vans=Van::all();
        $drivers=Driver::all();

        return view('admin.trip.edit',[
            'vans'=>$vans,
            'drivers'=>$drivers,
            'trip'=>$trip,
            
        ]);
       

     
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trip $trip)
    {
        $request->validate([
            'vanId'=> 'required',
            'driverId'=> 'required',
            'destination'=> 'required|string|max:225',
            'placeOfOrigin'=> 'required|string|max:225',
            'departureTime'=> 'required|string|max:225',
            'arrivalTime'=> 'required|string|max:225',
            
           
           ]);
    
           $trip->update([
            'vanId'=>$request->vanId,
            'driverId'=>$request->driverId,
            'destination'=>$request->destination,
            'placeOfOrigin'=>$request->placeOfOrigin,
            'departureTime'=>$request->departureTime,
            'arrivalTime'=>$request->arrivalTime,
            
            
    
           ]);
    
           return redirect('/admin/trip')->with('status', 'Trip Details Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trip $trip)
    {
        //
    }
}
