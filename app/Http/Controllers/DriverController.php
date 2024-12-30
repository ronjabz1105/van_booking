<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    
    {
        $drivers= Driver::paginate(10);

        return view('admin.driver.index',[
            'drivers'=>$drivers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.driver.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'name'=> 'required|string|max:225',
        'phone'=> 'required',
        'address'=> 'required|string|max:225',
        'license'=> 'required|string|max:225',
        'gender'=> 'required|string|max:225',
        //'status'=> 'nullable',
       ]);

       Driver::create([
        'name'=>$request->name,
        'phone'=>$request->phone,
        'address'=>$request->address,
        'license'=>$request->license,
        'gender'=>$request->gender,
        

       ]);

       return redirect('/admin/driver')->with('status', 'Driver Details Saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver)
    {
        return view('admin.driver.show', compact('driver'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Driver $driver)
    {
        return view('admin.driver.edit', compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Driver $driver)
    {
        $request->validate([
            'name'=> 'required|string|max:225',
            'phone'=> 'required',
            'address'=> 'required|string|max:225',
            'license'=> 'required|string|max:225',
            'gender'=> 'required|string|max:225',
            //'status'=> 'nullable',
           ]);
    
           $driver->update([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'license'=>$request->license,
            'gender'=>$request->gender,
            
    
           ]);
    
           return redirect('/admin/driver')->with('status', 'Driver Details Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Driver $driver)
    {
       $driver->delete();
       return redirect('/admin/driver')->with('status', 'Driver Details Deleted');
    }
}
