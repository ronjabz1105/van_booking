<?php

namespace App\Http\Controllers;

use App\Models\Van;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vans= Van::where('adminId',Auth::user()->id)->paginate(10);

        return view('admin.van.index',[
            'vans'=>$vans,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.van.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           $request->validate([
            'type'=> 'required|string|max:225',
            'model'=> 'required',
            'color'=> 'required|string|max:225',
            'plateNumber'=> 'required|string|max:225',
            
           
           ]);
    
           Van::create([
            'type'=>$request->type,
            'model'=>$request->model,
            'color'=>$request->color,
            'plateNumber'=>$request->plateNumber,
            'adminId'=>Auth::user()->id,
            
    
           ]);
    
           return redirect('/admin/van')->with('status', 'Van Details Saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(Van $van)
    {
        return view('admin.van.show', compact('van'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Van $van)
    {
        return view('admin.van.edit', compact('van'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Van $van)
    {
        $request->validate([
            'type'=> 'required|string|max:225',
            'model'=> 'required',
            'color'=> 'required|string|max:225',
            'plateNumber'=> 'required|string|max:225',
            
           
           ]);
    
           $van->update([
            'type'=>$request->type,
            'model'=>$request->model,
            'color'=>$request->color,
            'plateNumber'=>$request->plateNumber,
           ]);
    
           return redirect('/admin/van')->with('status', 'Van Details Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Van $van)
    {
        $van->delete();
        return redirect('/admin/van')->with('status', 'Van Details Deleted');
    }
}
